<?php

use App\Controllers\HomeController;

$router->register('/', HomeController::class, 'index');
$router->register('/about', HomeController::class, 'about');