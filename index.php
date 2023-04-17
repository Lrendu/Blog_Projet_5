<?php
    require 'vendor/autoload.php';

    define('DEBUG_TIME', microtime(true));

    use App\Controllers\FrontController;
    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $router = new App\Router(dirname(__DIR__) . '/views');
    $router
        ->get('/homepage');
        ->run();

