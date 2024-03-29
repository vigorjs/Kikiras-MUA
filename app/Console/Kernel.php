<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('instagram-feed:refresh')->weekly()->runInBackground();
        $schedule->command('instagram-feed:refresh-tokens')->cron('0 0 */55 * *')->runInBackground();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
        $this->load(\Dymantic\InstagramFeed\Commands\RefreshTokens::class);

        require base_path('routes/console.php');
    }
}
