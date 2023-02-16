<?php

namespace App\Models;

class MonedaDto
{
    public $nombreCompleto;
    public $tipo;
    public $precio;
    public $precioAnterior;

    public function __construct($nombreCompleto, $tipo, $precio, $precioAnterior)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->precioAnterior = $precioAnterior;
    }
}
