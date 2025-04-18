<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class MainController
{
    #[Route(path: '/', name: 'app_index', methods: 'GET')]
    public function index(): Response
    {
        return new Response('index');
    }
}