<?php

namespace App\Console\Commands\Shedule;

use App\Models\Number;
use Illuminate\Console\Command;

class CreateNumbersFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'numbers:createfile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating file with numbers';

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
            $numbers .= "{$item['number']}\n";
        }
        file_put_contents('report.txt', $numbers);
        $this->info("File report.txt created");
    }
}
