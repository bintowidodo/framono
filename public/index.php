<?php
    
    require '../vendor/autoload.php';
	define('CORE_FRAMEWORK', true);

	use App\Core\AppLoader;
	use App\Core\RouteLoader;
	use App\Core\Router;

	try {
        // Muat aplikasi yang terdaftar
        $appLoader = new AppLoader(__DIR__ . '/../config/apps.php');
        $appLoader->load();

        // Muat semua rute dari aplikasi
        $routeLoader = new RouteLoader();
        foreach ($appLoader->getApps() as $app => $details) {
            $routeLoader->load($details['path']);
        }

        $routes = $routeLoader->getRoutes();

        // Inisialisasi Router
        $router = new Router($routes);

        // Dispatch request
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        $router->dispatch($method, $uri);
    } catch (Exception $e) {
        http_response_code(500);
        echo "Error: " . $e->getMessage();
    }
