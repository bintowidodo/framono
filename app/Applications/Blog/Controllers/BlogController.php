<?php
	namespace App\Applications\Blog\Controllers;
    use App\Core\BaseController; // Harus mewarisi dari framework core

    class BlogController extends BaseController
    {
        public function index()
        {
            echo "Welcome to the Blog!";
        }

        public function show($id)
        {
            echo "Displaying blog post with ID: $id";
        }
    }