<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/11/18
 * Time: 15:33
 */

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/quete5/article/{id}", name="article_show")
     */
    public function articleById(Article $article) :Response
    {
        return $this->render('blog/quete5article.html.twig', ['article'=>$article]);
    }

    /**
     * @Route("/quete5/category/{id}", name="category_show")
     */
    public function categoryById(Category $category) :Response
    {
        return $this->render('blog/quete5category.html.twig', ['category'=>$category]);
    }
}