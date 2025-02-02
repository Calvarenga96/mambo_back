<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;
use Exception;

class TaskStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $taskStatuses = TaskStatus::all()->makeHidden(["created_at", "updated_at"]);
            return response()->json($taskStatuses, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al obtener los estados de tarea.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStatusRequest $request)
    {
        try {
            $taskStatus = TaskStatus::create($request->validated());
            return response()->json($taskStatus, 201);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al crear el estado de tarea.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskStatus $taskStatus)
    {
        try {
            return response()->json($taskStatus, 200)->makeHidden(["created_at", "updated_at"]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al obtener el estado de tarea.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskStatusRequest $request, TaskStatus $taskStatus)
    {
        try {
            $taskStatus->update($request->validated());
            return response()->json($taskStatus, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al actualizar el estado de tarea.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        try {
            // Validar si hay tareas asociadas al estado antes de eliminar
            if ($taskStatus->tasks()->exists()) {
                return response()->json(['message' => 'No se puede eliminar el estado porque hay tareas asociadas'], 400);
            }

            $taskStatus->delete();
            return response()->json(['message' => 'Estado eliminado correctamente'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Error al eliminar el estado de tarea.'], 500);
        }
    }
}
