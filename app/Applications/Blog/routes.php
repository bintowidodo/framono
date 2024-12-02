<?php
	
	use App\Applications\Blog\Controllers\BlogController;

	if (!defined('CORE_FRAMEWORK')) {
		exit('Direct access not allowed');
	}

	
	return [
		['GET', '/blog', [BlogController::class, 'index']],
		['GET', '/blog/{id}', [BlogController::class, 'show']],
	];
