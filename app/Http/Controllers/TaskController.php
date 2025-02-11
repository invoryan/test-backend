<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Exception;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{

    public function store(StoreRequest $request)
    {
        try {
            $task = Task::create($request->all());
            return response()->json([
                'status_code' => 201,
                'status_message' => 'Success',
                'description' => 'Tarea creada correctamente',
                'result' => $task
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status_code' => 500,
                'status_message' => 'Internal Server Error',
                'description' => 'Error en el servidor',
                'problem' => $e->getMessage()
            ]);
        }
    }
}
