<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth.redirect'])->group(function() {

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register-process' , [AuthController::class , 'regisProcess'])
->name('regis.process');

Route::get('/login' , [AuthController::class , 'login'])->name('login');
Route::post('/login-process' , [AuthController::class , 'loginProcess'])
->name('login.process');
});

Route::middleware(['auth.redirect'])->group(function() {

Route::get('/dashboard' , [DashboardController::class , 'index'])
->name('dashboard');
Route::get('/dashboard/create-video' , [CrudController::class , 'create'])
->name('create.video');
Route::post('/dashboard/store-video' , [CrudController::class , 'store'])
->name('store.video');
Route::get('/dashboard/all-video-move' , [DashboardController::class  , 'allVideo'])
->name('all.video');
Route::get('/logout' , [AuthController::class, 'logout'])
->name('logout');
Route::delete('/delete{id}' , [CrudController::class , 'destroy'])
->name('delete');
Route::get('/download-video/{id}' , [CrudController::class  , 'download'])
->name('download.video');

});

