<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showdb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show current Database';

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
    public function handle()                    // Logic to handle command
    {
        $this->info('Current Database: '. DB::connection()->getDatabaseName());                  //Displays green output
    }
}

//Create custom artisan commands==>
/*
php artisan make:command showdb
Console command created successfully.

Command will be found in app\console\Commands\command_name.php
edit the signature and description in command_name.php
Register it in kernal.php


*/

