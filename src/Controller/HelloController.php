<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
class HelloController extends AbstractController
{

    private array $messages = ['Hello', 'Hi', 'Hey'];


    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }

    #[Route('/messages/{id<\d+>}', name: 'app_show_one_message')]
    public function showOne(int $id): Response
    {
        return $this->json($this->messages[$id]);
    }
    
}
