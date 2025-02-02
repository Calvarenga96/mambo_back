<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Exception;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $tasks = Task::all()->makeHidden(["created_at", "updated_at"]);
            return response()->json($tasks, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al obtener las tareas.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        try {
            $task = Task::create($request->validated());
            return response()->json($task, 201);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al crear la tarea.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        try {
            return response()->json($task, 200)->makeHidden(["created_at", "updated_at"]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al obtener la tarea.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        try {
            $task->update($request->validated());
            return response()->json($task, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al actualizar la tarea.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        try {
            $task->delete();
            return response()->json(null, 204);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al eliminar la tarea.'], 500);
        }
    }
}
