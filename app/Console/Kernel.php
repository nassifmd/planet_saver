<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \Illuminate\Console\Scheduling\ScheduleRunCommand::class,
        // Other commands...
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
            // Run calculateTopPlayer method at the end of each month
        $schedule->call(function () {
            app(DashboardController::class)->calculateTopPlayer();
        })->monthlyOn(26, '12:49');

        $schedule->command('schedule:run')->withoutOverlapping();

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
