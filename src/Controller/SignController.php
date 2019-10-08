<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SignController extends AbstractController
{
    /**
     * @Route("/signin", name="signin")
     */
    public function signin()
    {
        return $this->render('sign/signin.html.twig', [
            'controller_name' => 'SignController',
        ]);
    }
    /**
     * @Route("/signup", name="signup")
     */
    public function signup()
    {
        return $this->render('sign/signup.html.twig', [
            'controller_name' => 'SignController',
        ]);
    }
}
