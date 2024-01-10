<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(CategorieRepository $catrepo): Response
    {
        $categories = $catrepo->findAll();

        return $this->render('home/index.html.twig', [
            'categories' => '$categories',
        ]);
    }
}
