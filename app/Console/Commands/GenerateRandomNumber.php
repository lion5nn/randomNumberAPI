<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Models\Number;

class GenerateRandomNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:set';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a random number and return id';

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
        $randomNumber = rand(0, 999999);
        $resultArr = Number::create([
            'number' => $randomNumber,
        ]);
        $result = $resultArr['id'];
        $this->info($result);
    }
}
