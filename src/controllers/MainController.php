<?php

namespace App\controllers;

class MainController extends Controller
{
    public function index()
    {
        $this->twig->display('../views/Home.html.twig');
        echo $twig->render('../views/homepage.html.twig');
    }
}
