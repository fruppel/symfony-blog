<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    #[Route('/post/index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        return $this->render(
            'post/index.html.twig',
            ['posts' => $entityManager->getRepository(Post::class)->findAll()]
        );
    }
}


