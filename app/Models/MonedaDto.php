<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonedaDto extends Model
{
    protected $nombreCompleto;
    protected $tipo;
    protected $precio;
    protected $precioAnterior;

    public function __construct($nombreCompleto, $tipo, $precio, $precioAnterior)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->precioAnterior = $precioAnterior;
    }

    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioAnterior()
    {
        return $this->precioAnterior;
    }

}
