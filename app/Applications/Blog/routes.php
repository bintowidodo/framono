<?php
	
	use App\Applications\Blog\Controllers\BlogController;


	
	return [
		['GET', '/blog', [BlogController::class, 'index']],
		['GET', '/blog/{id}', [BlogController::class, 'show']],
	];
