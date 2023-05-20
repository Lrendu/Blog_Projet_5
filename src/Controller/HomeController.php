<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController extends Controller
{
     public function render(): void
     {
         echo $this->renderView('homepage.html.twig');
     }
  }
