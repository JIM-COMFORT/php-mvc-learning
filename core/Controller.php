<?php

namespace Core;
class Controller
{
    protected function render(string $view, array $data = []): void
    {
        // Extract data array to variables for use in the view
        extract($data);

        // Include the view file
        require __DIR__ . '/../app/Views/' . $view . '.php';
    }
}
