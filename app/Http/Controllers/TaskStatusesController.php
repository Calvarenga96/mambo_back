<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;

class TaskStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(TaskStatus::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStatusRequest $request)
    {
        $taskStatus = TaskStatus::create($request->validated());
        return response()->json($taskStatus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskStatus $taskStatus)
    {
        return response()->json($taskStatus, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStatusRequest $request, TaskStatus $taskStatus)
    {
        $taskStatus->update($request->validated());
        return response()->json($taskStatus, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        if ($taskStatus->tasks()->exists()) {
            return response()->json(['message' => 'No se puede eliminar el estado porque hay tareas asociadas'], 400);
        }

        $taskStatus->delete();
        return response()->json(['message' => 'Estado eliminado correctamente'], 200);
    }
}
