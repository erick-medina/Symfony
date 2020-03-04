<?php

namespace App\Controller;

use App\Entity\ShowMyName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    /**
     * @Route("/about-me", name="learning")
     */
    public function index()
    {
        $name = new ShowMyName();
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
            'name' => $name->getName(),
        ]);
    }

    /**
     * @Route("/change-my-name", name="changeName")
     */
    public function changeMyName()
    {
        $name = new ShowMyName();
        return $this->render('learning/changeMyName.html.twig', [
            'name' => $name->getName(),
        ]);
    }

    public function aboutMe()
    {
        return 'ome lorum ipsum';
    }
}
