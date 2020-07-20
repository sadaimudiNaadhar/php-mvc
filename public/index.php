<?php

session_start();

/**
 * Autoloader
 */
require dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));
define('BASE_URL', 'http://localhost:8000');

/**
 * Routing
 */
$router = new Main\Router();

// Add the routes
$router->add('/', ['controller' => 'Home', 'action' => 'index']);
$router->add('/register', ['controller' => 'Home', 'action' => 'register']);
$router->add('/login', ['controller' => 'Home', 'action' => 'login']);
$router->add('/register', ['controller' => 'Home', 'action' => 'register']);
$router->add('/home', ['controller' => 'Home', 'action' => 'home']);
$router->add('/logout', ['controller' => 'Home', 'action' => 'logout']);

$router->dispatch($_SERVER['REQUEST_URI'] ?? null);
