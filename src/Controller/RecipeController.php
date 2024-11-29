<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RecipeController extends AbstractController
{
    #[Route(
        '/recette', 
        name: 'recipe.index',
    )]
    public function index(): Response
    {
        return new Response('Recettes');
    }

    #[Route(
        '/recette/{slug}-{id}',
        name: 'recipe.show',
        requirements: ['slug' => '[a-z0-9-]+', 'id' => '\d+'],
    )]
    public function show(string $slug, int $id): Response
    {
        return new Response('Recette n°' . $id . ' : ' . $slug);
    }
}
