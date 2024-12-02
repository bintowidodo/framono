<?php
	require '../vendor/autoload.php';
	

	use App\Core\RouteLoader;
	use App\Core\Router;

	// Muat semua rute dari aplikasi
	$routeLoader = new RouteLoader();
	$routeLoader->load(__DIR__ . '/../app/Applications');
	$routes = $routeLoader->getRoutes();

	// Inisialisasi Router
	$router = new Router($routes);

	// Dispatch request
	$method = $_SERVER['REQUEST_METHOD'];
	$uri = $_SERVER['REQUEST_URI'];

	$router->dispatch($method, $uri);
