<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../core/Router.php';

// Register autoloader before any class instantiation
spl_autoload_register(function(string $className): void {
    $directories = [
        __DIR__ . '/../app/controllers/',
        __DIR__ . '/../app/models/',
        __DIR__ . '/../core/',
    ];

    foreach ($directories as $directory) {
        $file = $directory . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);



$router = new Router();
$router->register('/', 'HomeController', 'index');
$router->register('/about', 'HomeController', 'about');
$router->dispatch($uri);

