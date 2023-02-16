<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Spatie\ShortSchedule\ShortSchedule;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    protected function shortSchedule(ShortSchedule $schedule) {
        $schedule->command('updatemoney')->everySecond(10);
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
