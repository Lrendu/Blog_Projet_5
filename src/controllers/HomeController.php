<?php

declare(strict_types=1);

namespace App\controllers;

class HomeController implements Controller
{
    public function render(): void
    {
        echo 'Hello world!';
    }
}
