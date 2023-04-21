<?php

namespace App;

use App\controllers\Controller;
use App\controllers\HomeController;

class Router
{
    public function handle(array $request): void
    {
        $url = $request['uri'] ?? '/';
        $controller = $this->match($url);

        $controller->render();
    }

    private function match($url): Controller
    {
        if ($url === '/') {
            return new HomeController();
        }

        return new HomeController();
    }
}
