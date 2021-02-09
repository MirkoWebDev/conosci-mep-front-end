<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="root")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'users' => json_decode(file_get_contents(__DIR__ . '/../Resources/users.json', true)),
        ]);
    }

    /**
     * @Route("/user/{id}", name="user_page")
     */
    public function user($id): Response
    {
        return $this->render('main/user.html.twig', [
            'user' => json_decode(file_get_contents(__DIR__ . '/../Resources/users.json', true))[$id -1 ],
        ]);
    }

    /**
     * @Route("/posts", name="posts")
     */
    public function getPosts(): Response
    {
        return $this->render('main/posts.html.twig', [
            'posts' => json_decode(file_get_contents(__DIR__ . '/../Resources/posts.json'))
            ]);
    }
}
