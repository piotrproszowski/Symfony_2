<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MessagesController extends AbstractController
{

    private array $messages = ['Hello', 'Hi', 'Hey'];

    #[Route('/messages/{limit<\d+>?3}', name: 'app_messages')]
    public function index(int $limit = 3): Response
    {
        return $this->render('messages/index.html.twig', [
            'controller_name' => 'MessagesController',
            'messages' => array_slice($this->messages, 0, $limit),
        ]);
    }
    #[Route('/messages/show/{id}', name: 'app_messages_show')]
    public function showOne(int $id): Response
    {
        try {
            return $this->render('messages/show_one.html.twig', [
                'id' => $id,
                'message' => $this->messages[$id] ?? 'Wiadomość nie znaleziona',
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Wystąpił błąd podczas wyświetlania wiadomości.');
            return $this->redirectToRoute('app_messages');
        }
    }
}
