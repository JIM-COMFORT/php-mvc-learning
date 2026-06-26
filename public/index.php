<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router = new Router();

require_once __DIR__ . '/../routes/web.php';

$router->dispatch($uri);