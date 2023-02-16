<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

use App\Models\Historial;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $historial = Historial::all();
        return response()->json($historial);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $moneda): JsonResponse
    {
        $historial = Historial::find($moneda);
        return response()->json($historial);
    }
}
