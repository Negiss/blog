<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Tag;
use App\Form\CategoryType;
use App\Form\ArticleType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Article;

/**
 * Class BlogController
 * @package App\Controller
 * @Route("/blog", name="blog_")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function home()
    {
        return $this->render('blog/index.html.twig');
    }

    /**
     * Show all row from article's entity
     *
     * @Route("/articles", name="articles")
     * @return Response A response instance
     */
    public function index(Request $request, ObjectManager $manager) : Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->allArticlesWithTags();

        $article = new Article();
        $form = $this->createForm(
            ArticleType::class,
            $article
        );
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('blog_articles');
        }

        return $this->render('blog/article.html.twig', [
                'articles' => $articles,
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * Getting an article with a formatted slug for title
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
     * @Route("/category", name="category_all")
     * @return Response A response instance
     */
    public function showCategories(Request $request) : Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        if (!$categories) {
            throw $this->createNotFoundException(
                'No category found.'
            );
        }

        $category = new Category();
        $form = $this->createForm(
            CategoryType::class,
            $category
        );
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('blog_category_all');
        }

        return $this->render(
            'blog/category.html.twig',
            [
                'categories' => $categories,
                'form' => $form->createView(),
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

        $articles = $category->getArticles();

        return $this->render(
            'blog/articlesByCategory.html.twig',
            [
                'category' => $category,
                'articles' => $articles,
            ]
        );
    }
}
