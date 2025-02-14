<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\Type\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('/post/index', name: 'post_index')]
    public function index(): Response
    {
        return $this->render(
            'post/index.html.twig',
            ['posts' => $this->entityManager->getRepository(Post::class)->findAll()]
        );
    }

    #[Route('/post/create', name: 'post_create')]
    public function create(): Response
    {
        return $this->render(
            'post/create.html.twig',
            ['form' => $this->createForm(PostType::class, new Post())]
        );
    }
}


