<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

use Illuminate\Support\Collection;

use App\Models\Moneda;
use App\Models\Historial;
use App\Models\MonedaDto;

use App\Http\Controllers\ApiController;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $moneda = Moneda::all();
        $historial = Historial::all();

        $nuevo_objeto = array();

        foreach ($moneda as $m) {
            $precioActual = $m->precio;
            $precioAnterior = $historial->where('moneda_id', $m->id)
                ->sortByDesc('fecha')
                ->skip(1)
                ->value('precio');

            $nuevo_objeto[] = new MonedaDto(
                $m->nombre,
                $m->tipo,
                $precioActual,
                $precioAnterior
            );
        }

        return response()->json(collect($nuevo_objeto));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $nombre): JsonResponse
    {
        $moneda = Moneda::find($nombre);
        $historial = Historial::find($moneda->id);

        $nuevo_objeto = new MonedaDto(
            $moneda->nombre,
            $moneda->tipo,
            $moneda->precio,
            $historial->precio
        );

        return response()->json($nuevo_objeto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(): void
    {
        $api = new ApiController();
        $moneda = Moneda::all();

        foreach ($moneda as $m) {
            $hora = date('Y-m-d H:i:s');
            $precio = $api->getMoneyPrice($m->tipo);

            $historial = new Historial();
            $historial->moneda_id = $m->id;
            $historial->precio = $precio;
            $historial->fecha = $hora;
            $historial->save();

            $m->precio = $precio;
            $m->fecha = $hora;
            $m->save();
        }
    }
}
