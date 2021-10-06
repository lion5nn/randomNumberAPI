<?php

namespace App\Console\Commands;

use App\Mail\ReportMail;
use App\Models\Number;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It send mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $content = Number::all();
        $numbers = null;
        foreach ($content as $item) {
            $numbers[] = "{$item['number']}\n";
        }
        Mail::to('admin@admin.admin')->send(new ReportMail($numbers));
        $this->info("The report was sent to admin mail");
    }
}
