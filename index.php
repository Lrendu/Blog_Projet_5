<?php

use App\Router;

require 'vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

$router = new Router();
$router->handle($_REQUEST);

