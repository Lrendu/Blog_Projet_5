<?php

namespace App\controllers;

class MainController extends Controller
{
    public function index()
    {
        $this->twig->display('../View/Home.html.twig');
        echo $twig->render('../View/homepage.html.twig');
    }
}
