<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register-process' , [AuthController::class , 'regisProcess'])
->name('regis.process');
Route::post('/login-process' , [AuthController::class , 'loginProcess'])
->name('login.process');
Route::get('/logout' , [AuthController::class, 'logout'])
->name('logout');
Route::get('/dashboard' , [DashboardController::class , 'index'])->name('dashboard');
