<?php

declare(strict_types=1);

namespace App\controllers;

class HomeController extends MainController
{
     public function defaultMethod()
     {
         return $this->twig->render('Home.html.twig');;
     }

     public function render()
     {
          return $this->twig->render('Home.html.twig');

     }
  }
