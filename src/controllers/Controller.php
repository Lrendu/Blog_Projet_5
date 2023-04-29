<?php

declare(strict_types=1);

namespace App\controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    private $loader;
    protected $twig;

    public function __construct()
    {
        //paramètrage du dossier avec les views
        $this->loader = new FilesystemLoader(ROOT.'/src/views');

        //paramètrage de Twig
        $this->twig = new Environment($this->loader, ['debug' => true]);
    }

    public function render(){

    }

}