<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;

/**
 * Class BlogController
 * @package App\Controller
 * @Route("/blog", name="blog_")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * Show all row from article's entity
     *
     * @Route("/all-articles", name="all_articles")
     * @return Response A response instance
     */
    public function index() : Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        if (!$articles) {
            throw $this->createNotFoundException(
                'No article found in article\'s table.'
            );
        }

        return $this->render(
            'blog/allArticles.html.twig',
            ['articles' => $articles]
        );
    }

    /**
     * Getting a article with a formatted slug for title
     *
     * @param string $slug The slugger
     *
     * @Route("/article/{slug<^[a-z0-9-]+$>}",
     *     defaults={"slug" = null},
     *     name="show")
     *  @return Response A response instance
     */
    public function show($slug) : Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('Nothing has been sent');
        }

        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );

        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);

        if (!$article) {
            throw $this->createNotFoundException(
                'No article with '.$slug.' title, has been found'
            );
        }

        return $this->render(
            'blog/showArticle.html.twig',
            [
                'article' => $article,
                'slug' => $slug,
            ]
        );
    }

    /**
     * @param string $category
     * @return Response
     * @Route("/category/{category}", name="category")
     */
    public function showByCategory(string $category) : Response
    {
        if (!$category) {
            throw $this
                ->createNotFoundException('Nothing has been sent');
        }

        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneByName($category);

        if (!$category) {
            throw $this->createNotFoundException(
                'No category with '.$category.' name, has been found'
            );
        }

        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findBy(['category' => $category->getId()], ['id' => 'desc'], 10);

        return $this->render(
            'blog/category.html.twig',
            [
                'category' => $category,
                'articles' => $articles,
            ]
        );
    }
}
