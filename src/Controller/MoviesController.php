<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ['movie1', 'movie2', 'movie3', 'movie4', 'movie5'];

        return $this->render('index.html.twig', [
            'title' => 'Movies',
            'movies' => $movies,
        ]);
    }











//    /**
//     * @Route("/old", name="app_movies_old", methods={"GET", "HEAD"})
//     */
//    public function oldMethod(): JsonResponse
//    {
//        return $this->json([
//            'message' => 'Welcome to your new controller, using old method for routing!',
//            'path' => 'src/Controller/MoviesController.php',
//        ]);
//    }
}
