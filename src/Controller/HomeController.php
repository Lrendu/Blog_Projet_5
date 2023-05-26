<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Repository\PostRepository;

class HomeController extends Controller
{
     public function render(): void
     {
         $postRepository = new PostRepository();
         var_dump($postRepository->findAll());
         echo $this->renderView('homepage.html.twig');
     }
  }
