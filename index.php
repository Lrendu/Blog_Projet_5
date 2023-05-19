<?php

use App\Router;

require 'vendor/autoload.php';

define('DEBUG_TIME', microtime(true));
define('ROOT', (__DIR__));

$host = 'db'; 
$dbName = 'blog_lr';
$user = 'testuser';
$password = 'testpassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$router = new Router();
$router->handle($_REQUEST);
