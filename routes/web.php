<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/product/{product:id}', [PagesController::class, 'productPage']);

Route::get('/login', function() {
    return Inertia::render('LoginPage');
});

Route::get('/registration', function() {
    return Inertia::render('RegistrationPage');
});

Route::get('/bestsellers', [PagesController::class, 'bestsellerPage']);

Route::get('/news', [PagesController::class, 'newsPage']);

Route::get('/categories', [PagesController::class, 'categoriesPage']);

Route::get('/category/{category:id}', [PagesController::class, 'categoryPage']);

Route::get('/cart', function() {
    return Inertia::render('CartPage');
});

Route::get('/teste', [CategoryController::class, 'indexTeste']);
