<?php

namespace App\Console\Commands;

use App\Models\Number;
use Illuminate\Console\Command;

class RetriveNumberById extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:get {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return number by id';

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
        $id = $this->argument('id');
        $result = Number::select('number')
            ->where('id', '=', $id)
            ->get();
        $this->info($result[0]["number"]);
    }
}
