<?php
	namespace App\Applications\Shop\Controllers;

    class ShopController
    {
        public function index()
        {
            echo "Welcome to the Shop!";
        }

        public function show($id)
        {
            echo "Displaying product with ID: $id";
        }
    }
