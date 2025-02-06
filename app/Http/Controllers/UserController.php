<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => User::all(),
            'message' => 'Lista de Usuarios',
            'status' => true,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {
            $User = User::create($request->validated());

            return response()->json([
                'data' => $User,
                'message' => 'Usuario creado',
                'status' => true,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'data' => null,
                'message' => $e->getMessage(),
                'status' => false,
            ], JsonResponse::HTTP_OK);
        };
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'data' => $user,
            'message' => 'User',
            'status' => true,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update($request->validated());

            return response()->json([
                'data' => $user,
                'message' => 'User updated',
                'status' => true,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'data' => null,
                'message' => $e->getMessage(),
                'status' => false,
            ], JsonResponse::HTTP_OK);
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
