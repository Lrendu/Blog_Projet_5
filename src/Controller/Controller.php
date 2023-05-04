<?php

declare(strict_types=1);

namespace App\Controller;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader(ROOT.'/src/View');
        $this->twig = new Environment($loader, ['debug' => true]);
    }

    protected function renderView(string $template, array $options = []): string
    {
        try {
            return $this->twig->render($template, $options);
        } catch (LoaderError|RuntimeError|SyntaxError $e) {
            return $e->getMessage();
        }
    }
}