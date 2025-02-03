<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStatusesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'getUser'])->middleware('auth:sanctum');
    Route::apiResource('tasks', TaskController::class)->middleware('auth:sanctum');
    Route::apiResource('task-statuses', TaskStatusesController::class)->middleware('auth:sanctum');
    Route::apiResource('users', UserController::class)->middleware('auth:sanctum');
});
