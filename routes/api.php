<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

// Rotas para redefinição de senha
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);


Route::post('users/change-password', [UserController::class, 'changePassword']);

Route::post('oauth/google', 'Auth\GoogleAuthController@redirectToGoogle');
Route::get('oauth/google/callback', 'Auth\GoogleAuthController@handleGoogleCallback');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rotas para redefinição de senha
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// // Rotas para registro e login
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

