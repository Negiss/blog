<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/11/18
 * Time: 15:33
 */

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/quete5/category/{id}", name="category_show")
     */
    public function categoryById(Category $category) :Response
    {
        return $this->render('blog/quete5category.html.twig', ['category'=>$category]);
    }
}