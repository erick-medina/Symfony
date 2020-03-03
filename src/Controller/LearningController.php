<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me", name="learning")
     */
    public function index()
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'lorem' => $this->aboutMe(),

        ]);
    }

    public function aboutMe()
    {
        return 'ome lorum ipsum';
    }
}
