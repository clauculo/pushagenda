<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class indexController extends AbstractController
{
    #[Route(path: '/', name: 'index.get', methods: ['GET'])]
    public function index()
    {
        return "Hello, World!";
    }
    #[Route(path: '/test', name: 'index2.get', methods: ['GET'])]
    public function index2()
    {
        return $this->render('index2.html.twig');
    }
}
