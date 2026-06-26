<?php

namespace Core;
class Router

{

    private array $routes = [];

    public function register(string $path, string $controller, string $method): void
    {
        // Implementation for registering routes
        $this->routes[$path]= [
            'controller' => $controller,
            'method' => $method
        ];
    }
    public function dispatch(string $uri): void
    {
        // Implementation for dispatching requests
        
        //1. Check if route exists → if not, 404 and return

        if (!isset($this->routes[$uri])) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        //2. Extract controller name from $this->routes[$uri]

        $route = $this->routes[$uri];
        $controllerName = $route['controller'];

        //3. Extract method name from $this->routes[$uri]

        $methodName = $route['method'];

        //4. Instantiate controller

        $controllerInstance = new $controllerName();

        //5. Call method on controller instance
        if (!method_exists($controllerInstance, $methodName)) {
            http_response_code(500);
            echo "500 Internal Server Error: Method $methodName not found in controller $controllerName";
            return;
        }
        $controllerInstance->$methodName();

    }
}
