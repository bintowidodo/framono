<?php

use App\Controllers\HomeController;

return [
    '/' => function () {
        return "Welcome to the homepage!";
    },
    '/about' => function () {
        return "About us page.";
    },
    '/home' => [HomeController::class, 'index'], // Menggunakan controller
];
