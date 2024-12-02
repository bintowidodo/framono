<?php
namespace App\Core;

class Router
{
    protected $routes = [];

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function dispatch($method, $uri)
    {
        foreach ($this->routes as $route) {
            [$routeMethod, $routePattern, $callback] = $route;

            // Ubah pola rute menjadi regex
            $regexPattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([^/]+)', $routePattern);
            $regexPattern = '#^' . $regexPattern . '$#';

            if ($routeMethod === $method && preg_match($regexPattern, $uri, $matches)) {
                array_shift($matches); // Hapus elemen pertama (full match)

                if (is_array($callback)) {
                    [$controller, $action] = $callback;

                    // Buat instance dari controller jika metode bukan statik
                    if (!is_callable($callback)) {
                        $controller = new $controller();
                        $callback = [$controller, $action];
                    }
                }

                // Jalankan callback dengan parameter
                return call_user_func_array($callback, $matches);
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
