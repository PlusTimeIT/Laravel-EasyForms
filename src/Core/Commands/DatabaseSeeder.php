<?php

namespace Second2None\EasyForms\Core\Commands;

use Illuminate\Console\Command;

use Second2None\EasyForms\Core\Base;
use Second2None\EasyForms\Core\DB\DBSeeder;

use Artisan;
use File;

// use Second2None\EasyForms\Core\Commands\DatabaseSeeder
class DatabaseSeeder extends Command {

    protected $signature    = 'SEF:db-seeder';
    protected $description  = 'Second2None Easy Forms database seeder';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $this->comment( 'Completing DB:Seeder' );
        ( new DBSeeder )->run();
        
        return 0;
    }
}
