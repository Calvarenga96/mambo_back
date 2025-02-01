<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskStatusesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource("tasks", TaskController::class);

Route::apiResource('task-statuses', TaskStatusesController::class);
