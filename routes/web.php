<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
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
Route::get('/dashboard' , [DashboardController::class , 'index'])
->name('dashboard');
Route::get('/dashboard/create-video' , [CrudController::class , 'create'])
->name('create.video');
Route::post('/dashboard/store-video' , [CrudController::class , 'store'])
->name('store.video');
Route::get('/dashboard/all-video-move' , [DashboardController::class  , 'allVideo'])
->name('all.video');
