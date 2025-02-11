<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);

Route::apiResource('tasks', TaskController::class);