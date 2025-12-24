<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\WebAuthController;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('layouts.app');
});


Route::get('/login', [WebAuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [WebAuthController::class, 'login']);

Route::post('/logout', [WebAuthController::class, 'logout'])
    ->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TasksController::class);
    Route::get('/create/task', [TasksController::class, 'store'])->name('store');
});
