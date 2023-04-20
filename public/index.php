<?php

    require '../vendor/autoload.php';

   $router = new Router();

   $router->register('/', function (){
    return 'HomePage';
   });

     $router->register('/contact', function () {
        return 'ContactPage';
     });

    try {
        echo $router->resolve($_SERVER['REQUEST_URI']);
    } catch (RouteNotFoundException $e)
        echo $e->getMessage();


