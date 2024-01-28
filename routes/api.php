<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdController;

Route::prefix('products')->group(function () {
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/{id}', [ShopController::class, 'show']);
    Route::post('/', [ShopController::class, 'store']);
    Route::put('/{id}', [ShopController::class, 'update']);
    Route::delete('/{id}', [ShopController::class, 'destroy']);
});

Route::apiResource('users', UserController::class);

// Rotas da API para categorias
Route::apiResource('categories', CategoryController::class);

// Rotas da API para anúncios
Route::apiResource('ads', AdController::class);

Auth::routes();

// Rotas para redefinição de senha
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// // Rotas para registro e login
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
