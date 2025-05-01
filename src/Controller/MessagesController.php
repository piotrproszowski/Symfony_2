<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{
    #[Route('/messages', name: 'app_messages')]
    public function index(): Response
    {
        return $this->render('messages/index.html.twig', [
            'controller_name' => 'MessagesController',
        ]);
    }
    #[Route('/messages/{id}', name: 'app_messages_show')]
    public function showOne(int $id): Response
    {
        return $this->render('messages/show_one.html.twig', [
            'id' => $id,
        ]);
    }
}
