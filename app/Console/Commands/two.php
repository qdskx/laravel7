<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class two extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'two';
//    protected $signature = 'two {user=skx}';

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
        $name = $this->info('Display this on the screen');
//        $user = $this->argument('user');
//        $this->info($user);
//        $this->ask('What is your name?');
//        $name = $this->confirm('Do you wish to continue? [y|N]');
//        $name = $this->anticipate('What is your name?', ['Taylor', 'sx']);

//        $name = $this->anticipate('What is your name?', function($input){
//////            var_dump($input);
//////            $this->info($input);
////        });//

        var_dump($name);
//        var_dump($user);
    }

}
