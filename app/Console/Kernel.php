<?php

namespace App\Console;

use App\Console\Commands\Expiration;
use App\Console\Commands\notify;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //send million Emails
         $schedule->command('queue:work')->everyMinute();
         $schedule->command('queue:restart')->everyFiveMinutes();

        // $schedule->command('inspire')->hourly();
        // $schedule->command('user:expire')->everyMinute();
         //$schedule->command('notify:email')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        //notify::class;
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
