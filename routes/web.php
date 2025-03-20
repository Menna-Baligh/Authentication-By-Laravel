<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    // register
    Route::get('registerForm','registerForm')->name('RegisterForm');
    Route::post('register','register')->name('Register');
    // login
    Route::get('loginForm','loginForm')->name('LoginForm');
    Route::post('login','login')->name('Login');
    // logout
    Route::post('logout', 'logout')->name('Logout');
});
