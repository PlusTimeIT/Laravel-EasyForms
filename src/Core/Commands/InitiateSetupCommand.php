<?php

namespace Second2None\EasyForms\Core\Commands;

use Illuminate\Console\Command;

use Second2None\EasyForms\Core\Base;

use Artisan;
use File;
// Second2None\EasyForms\Core\Commands\InitiateSetupCommand

class InitiateSetupCommand extends Command {

    protected $signature    = 'SEF:initiate';
    protected $description  = 'Second2None Easy Forms initaite setup, run migrations, run seeders';

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
        
        
        if( ! Base::is_vendor_published() ){
            $this->comment( 'Note: `php artisan vendor:publish --provider=Second2None\EasyForms\Core\Providers\EasyForms` has not been run yet.' );
            if ( $this->confirm( 'Do you want to run this now?' , true ) ) {
                $this->comment( 'Running vendor publish...' );
                Artisan::call( 
                    'vendor:publish' , [ 
                        '--provider'    => 'Second2None\EasyForms\Core\Providers\EasyForms' ,
                        '--force'       => true
                    ] 
                );
            }else{
                $this->comment( 'Error: You need to run `php artisan vendor:publish --provider=Second2None\EasyForms\Core\Providers\EasyForms` before you can continue further' );
                return 0;
            }
        }

        $this->comment( 'Starting migrations' );
        Artisan::call( 'migrate' );
        $this->comment( 'Finished migrations' );

            


        $this->comment( 'Second2None Easy Forms ========' );
        return 0;
    }
}
