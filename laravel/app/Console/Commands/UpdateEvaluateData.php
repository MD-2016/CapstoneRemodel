<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\EvaluationParser;

class UpdateEvaluateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:evaluate_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $parser = new EvaluationParser(date("o", strtotime('today')).date("m", strtotime('today')).date("d", strtotime('today')), true);



    }
}
