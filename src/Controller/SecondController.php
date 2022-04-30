<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
    /**
     * @Route('/second', name: 'app_second')
     */
    public function index(Request $req): Response
    {
        dump($req);
        return $this->render('second/index.html.twig', [
            'controller_name' => 'SecondController',
        ]);
    }
    /**
     * @Route("/hello/{name}",name="hello")
     */
    public function hello ($name): Response
    {
        return $this->render('second/hello.html.twig',array (
            'name' => $name
        ));
    }
}
