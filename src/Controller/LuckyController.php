<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number", name="lucky")
     */
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/index.html.twig', [
            'luckynumber' => $number,
        ]);
    }
}
