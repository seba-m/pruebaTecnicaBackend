<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\MonedaController;

class MoneyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatemoney';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update money from API';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $moneda = new MonedaController();
        $moneda->update();
    }
}
