<?php

// Aktifkan error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Load routes
$routes = require_once __DIR__ . '/../routes/web.php';

// Ambil URL dari request
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debugging: Tampilkan URL yang diterima
echo "Requested URL: " . $requestUri . "<br>";

// Cek apakah URL cocok dengan rute yang didefinisikan
if (isset($routes[$requestUri])) {
    $handler = $routes[$requestUri];
    
    // Jika handler adalah fungsi, panggil langsung
    if (is_callable($handler)) {
        echo $handler();
    }
    // Jika handler adalah array (mengacu ke controller dan metode)
    elseif (is_array($handler) && class_exists($handler[0]) && method_exists($handler[0], $handler[1])) {
        $controller = new $handler[0]();
        $method = $handler[1];
        echo $controller->$method();
    } else {
        http_response_code(500);
        echo "Route handler invalid.";
    }
} else {
    http_response_code(404);
    echo "Page not found.";
}
