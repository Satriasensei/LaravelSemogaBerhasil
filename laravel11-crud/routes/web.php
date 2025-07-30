<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', fn() => redirect('/products'));
Route::resource('products', ProductController::class);

