<?php

class Controller
{
    protected function render(string $view, array $data = []): void
    {
        // Extract data array to variables for use in the view
        extract($data);

        // Include the view file
        require_once __DIR__ . '/../app/views/' . $view . '.php';
    }
}
