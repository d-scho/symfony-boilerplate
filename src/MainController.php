<?php

declare(strict_types=1);

namespace App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class MainController extends AbstractController
{
    #[Route(path: '/', name: 'app_index', methods: 'GET')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}
