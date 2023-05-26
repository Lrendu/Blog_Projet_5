<?php

use App\Router;

require 'vendor/autoload.php';

define('DEBUG_TIME', microtime(true));
define('ROOT', (__DIR__));

$router = new Router();
$router->handle($_REQUEST);