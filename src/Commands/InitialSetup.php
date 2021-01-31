<?php

namespace PlusTimeIT\EasyForms\App\Commands;

use Illuminate\Console\Command;

use PlusTimeIT\EasyForms\App\Core\Base;

use PlusTimeIT\EasyForms\App\Core\Settings;

use Artisan;
use File;

// use PlusTimeIT\EasyForms\App\Commands\InitialSetup;
class InitialSetup extends Command {

    protected $signature    = 'SEF:initial-setup';
    protected $description  = 'PlusTimeIT Easy Forms initial-setup command to run vendor-publish and npm install';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $this->comment( 'PlusTimeIT EasyForms Initial Setup Script Starting ===================================================================' );
        
        // check if vendor:publish has been run.
        if( Base::isVendorPublished() ){
            $this->comment( 'Vendor has already been published before.' );
            if ( ! $this->confirm( 'Do you want to continue?' , true ) ) {
                $this->comment( 'Script cancelled' );
                return 0;
            }
        }else{
            $this->comment( 'Note: `php artisan vendor:publish --provider=PlusTimeIT\EasyForms\App\Providers\EasyForms` has not been run yet.' );
        }

        
        if ( ! $this->confirm( 'Do you want to run this now?' , true ) ) {
            $this->comment( 'Error: You need to run `php artisan vendor:publish --provider=PlusTimeIT\EasyForms\App\Providers\EasyForms` before you can continue further' );
            return 0;
        }

        $this->comment( '-- Running vendor publish ...' );
        Artisan::call( 
            'vendor:publish' , [ 
                '--provider'    => 'PlusTimeIT\EasyForms\App\Providers\EasyForms' ,
                '--force'       => true
            ] 
        );
        
        Settings::set( 'vendor_published' , true );
        Settings::save();
        $this->comment( '-- Vendor publish complete ...' );

        if ( ! $this->confirm( 'Do you want to run `npm install laravel-vue-s2n-easyforms` ?' , true ) ) {
            $this->comment( 'If this hasn;t been run before you need to install this npm package for the front end.' );
            return 0;
        }
        shell_exec( 'npm install --save laravel-vue-s2n-easyforms' );

        $this->comment( '-- Successfully completed Initial Setup Script' );
        $this->comment( 'PlusTimeIT EasyForms Initiate Script Finsihed ===================================================================' );
        return 0;
    }
}
