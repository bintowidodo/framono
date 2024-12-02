<?php
	use App\Applications\Shop\Controllers\ShopController;



    return [
        ['GET', '/shop', [ShopController::class, 'index']],
        ['GET', '/shop/{id}', [ShopController::class, 'show']],
    ];


