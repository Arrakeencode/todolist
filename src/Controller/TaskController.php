<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    #[Route('/task', name: 'app_task')]
    public function index(): Response

    {
        $tasks = $this->getTasks();
        return $this->render('task/index.html.twig', [
            'tasks' => 'tasks',
        ]);
    }
}
