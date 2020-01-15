<?php

namespace App\Console;

use App\Http\Controllers\PageController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
	    $schedule->call(function () {
		    PageController::processBulkNotifications();
	    })->name("Bulk_Notifications")->withoutOverlapping(15);
	    $schedule->call(function () {
		    PageController::deleteOlderNotifications();
	    })->name("deleteOlderNotifications")->withoutOverlapping(30);
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
