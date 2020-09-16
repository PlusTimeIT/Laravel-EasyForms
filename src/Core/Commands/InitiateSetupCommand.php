<?php

namespace Second2None\EasyForms\Core\Commands;

use Illuminate\Console\Command;

// Second2None\EasyForms\Core\Commands\InitiateSetupCommand

class InitiateSetupCommand extends Command {

    protected $signature = 'SEF:initiate';
    protected $description = 'Second2None Easy Forms initaite setup, run migrations, run seeders';

    protected $migrations = [
        '2020_08_30_024400_create_easy_forms_settings' ,
        '2020_08_30_024400_create_easy_forms' ,
        '2020_08_30_024400_create_easy_forms_fields' ,
        '2020_08_30_024400_create_easy_forms_errors' ,
    ];

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $this->comment( 'Second2None Easy Forms ========' );
        $this->comment( 'Completing initial setup' );
        $this->comment( 'Running migrations' );
        
        $migrations = collect( $this->migrations )->map( function( $migration ) {
            \Artisan::call( 'migrate --path=database/migrations/' . $migration );
        });

        return 0;
    }
}
