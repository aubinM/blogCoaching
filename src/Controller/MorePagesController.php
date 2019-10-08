<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MorePagesController extends AbstractController
{
    /**
     * @Route("/more/pages/left", name="more_pages_left")
     */
    public function index_left()
    {
        return $this->render('more_pages/sidebar-left.html.twig', [
            'controller_name' => 'MorePagesController',
        ]);
    }

    /**
     * @Route("/more/pages/right", name="more_pages_right")
     */
    public function index_right()
    {
        return $this->render('more_pages/sidebar-right.html.twig', [
            'controller_name' => 'MorePagesController',
        ]);
    }
}
