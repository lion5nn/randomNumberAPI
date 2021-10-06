<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Number;

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
        $schedule->command("numbers:createfile")->daily();

//        $schedule->call(function () {
//
//            $to      = 'nobody@example.com';
//            $subject = 'the subject';
//            $message = 'hello';
//            $headers = 'From: webmaster@example.com' . "\r\n" .
//                'Reply-To: webmaster@example.com' . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();
//
//            mail($to, $subject, $message, $headers);
//
//        })->everyFifteenMinutes();
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
