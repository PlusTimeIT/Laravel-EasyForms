<?php

namespace Second2None\EasyForms\App\Commands;

use Illuminate\Console\Command;

use Second2None\EasyForms\App\Core\Base;

use Second2None\EasyForms\App\Models\Settings;

use Artisan;
use File;

// use Second2None\EasyForms\App\Commands\InitiateSetup;
class InitiateSetup extends Command {

    protected $signature    = 'SEF:initiate';
    protected $description  = 'Second2None Easy Forms initaite setup, run migrations, run seeders';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $this->comment( 'Second2None EasyForms Initiate Script Starting ===================================================================' );
        $this->comment( '-- Completing initial setup' );
        
        if( Base::is_initial_setup_complete() ){
            $this->comment( '-- Initial setup has already been run.' );
            if ( ! $this->confirm( 'Do you want to run this again?' , true ) ) {
                $this->comment( 'Second2None EasyForms Initiate Script Finished ===================================================================' );
                return 0;
            }
        }

        // check if vendor:publish has been run.
        if( ! Base::is_vendor_published() ){
            $this->comment( 'Note: `php artisan vendor:publish --provider=Second2None\EasyForms\App\Providers\EasyForms` has not been run yet.' );
            if ( ! $this->confirm( 'Do you want to run this now?' , true ) ) {
                $this->comment( 'Error: You need to run `php artisan vendor:publish --provider=Second2None\EasyForms\App\Providers\EasyForms` before you can continue further' );
                return 0;
            }

            $this->comment( '-- Running vendor publish ...' );
            Artisan::call( 
                'vendor:publish' , [ 
                    '--provider'    => 'Second2None\EasyForms\App\Providers\EasyForms' ,
                    '--force'       => true
                ] 
            );
            $this->comment( '-- Vendor publish complete ...' );
        }

        // Run migrations
        $this->comment( '--- Starting migrations' );
        Artisan::call( 'migrate' );
        $this->comment( '--- Finished migrations' );

        // Run seeder
        $this->comment( '--- Starting seeder' );
        Artisan::call( 'SEF:db-seeder' );
        $this->comment( '--- Finished seeder' );

        $this->comment( '-- Finalising initial setup' );
        $this->comment( '-- ' . ( Settings::complete_initial_setup() ? 'Successfully completed initial setup' : 'Failed to complete the initial setup. Try running it again.' ) );
        
        $this->comment( 'Second2None EasyForms Initiate Script Finsihed ===================================================================' );
        return 0;
    }
}
