<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../core/Router.php';   

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router = new Router();
$router->dispatch($uri);

$router->register('/', 'HomeController', 'index');
$router->register('/about', 'HomeController', 'about');