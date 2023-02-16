<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Moneda;
use Carbon\Carbon;

class MonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Moneda::create([
            'tipo' => 'BTC',
            'nombre' => 'Bitcoin',
            'precio' => 0,
            'fecha' => Carbon::now(),
        ]);

        //descomentar lo siguiente en caso de que se quiera utilizar otras monedas
        /*
        Moneda::create([
            'tipo' => 'ETH',
            'nombre' => 'Ethereum',
            'precio' => 0,
            'fecha' => Carbon::now(),
        ]);

        Moneda::create([
            'tipo' => 'XRP',
            'nombre' => 'Ripple',
            'precio' => 0,
            'fecha' => Carbon::now(),
        ]);
        */
    }
}
