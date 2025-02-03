<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStatusesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('tasks', TaskController::class);
    Route::apiResource('task-statuses', TaskStatusesController::class);
    Route::apiResource('users', UserController::class);
})->middleware('auth:sanctum');
