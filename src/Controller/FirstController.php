<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{

    public function __construct(
    )
    {
    }

    #[Route("/welcome", methods: ["GET"])]
    public function welcome(Request $request)
    {
        return new Response('hello', Response::HTTP_OK);
    }

}