<?php

use Illuminate\Console\View\Components\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function(){
 Route::resource('tasks',TasksController::class);
});
