<?php
	namespace App\Core;

    class RouteLoader
    {
        protected $routes = [];

        public function load($applicationsPath)
        {
            $apps = scandir($applicationsPath);
            foreach ($apps as $app) {
                if ($app === '.' || $app === '..') continue;
                
                $routeFile = $applicationsPath . "/routes.php";
               // npl_echo($routeFile); $routeFile ="../app/Applications/Blog/routes.php";
                if (file_exists($routeFile)) {
                    $routes = include $routeFile;

                    // Validasi apakah $routes adalah array
                    if (!is_array($routes)) {

                        throw new \Exception("Route file {$routeFile} must return an array.");
                    }
                    $this->routes = array_merge($this->routes, $routes);
                } else {
                    throw new \Exception("Route file {$routeFile} does not exist.");
                }
                    }
             }

                public function getRoutes()
                {
                    return $this->routes;
                }
    }
