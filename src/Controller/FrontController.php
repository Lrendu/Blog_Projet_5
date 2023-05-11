<?php

   namespace App\controllers;

   use Twig\Environment;

class FrontController
{
    private $twig;

    public function __construct($twig)
    {
        /** @var Environment $twig */
        $this->twig = $twig;
    }

    public function index()
    {
        echo $this->twig->render('homepage.twig')['name' => 'Rémi']);
    }

   }