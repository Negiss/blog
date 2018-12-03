<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/11/18
 * Time: 15:33
 */

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function articleById(Article $article) :Response
    {
        $tags = $article->getTags();

        return $this->render(
            'blog/articleById.html.twig',
            [
                'tags' => $tags,
                'article' => $article,
            ]);
    }

    /**
     * @Route("/category/{id}", name="category_show")
     */
    public function categoryById(Category $category) :Response
    {
        return $this->render('blog/quete5category.html.twig', ['category'=>$category]);
    }

    /**
     * @param string $tag
     * @return Response
     * @Route("/blog/tag/{tag}", name="tag")
     */
    public function showByTag(string $tag) : Response
    {
        if (!$tag) {
            throw $this
                ->createNotFoundException('Nothing has been sent');
        }

        $tag = $this->getDoctrine()
            ->getRepository(Tag::class)
            ->findOneByName($tag);

        if (!$tag) {
            throw $this->createNotFoundException(
                'No tag with '.$tag.' name, has been found'
            );
        }

        $articles = $tag->getArticles();

        return $this->render(
            'blog/articlesByTag.twig',
            [
                'tag' => $tag,
                'articles' => $articles,
            ]
        );
    }
}