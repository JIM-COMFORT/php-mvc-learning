<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home/index', [
            'title' => 'Welcome to PHP MVC',
        ]);
    }

    public function about(): void
    {
        $this->render('home/about', [
            'title' => 'About Us',
        ]);
    }
}