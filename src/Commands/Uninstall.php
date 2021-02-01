<?php

namespace PlusTimeIT\EasyForms\App\Commands;

use Illuminate\Console\Command;

use PlusTimeIT\EasyForms\App\Core\Base;

use Artisan;
use File;

// use PlusTimeIT\EasyForms\App\Commands\Uninstall;
class Uninstall extends Command {

    protected $signature    = 'PTI:uninstall {--config=1} {--views=1} {--form-data=1}';
    protected $description  = 'PlusTimeIT Laravel Easy Forms Uninstaller removes everything created by PlusTimeIT Laravel EasyForms.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        
        $this->comment( 'PlusTimeIT EasyForms Uninstall Starting ===================================================================' );
        $this->comment( '-- Running uninstall checks' );

        if( $this->option('config') === 1 ) {
            // clear config
            $this->comment( '--- Removing configuration files' );
            if( File::Exists( config_path( 'easy_forms.php' ) ) ){
                $this->comment( '---- Configuration file found' );                
                $this->comment( File::delete( config_path( 'easy_forms.php' ) ) ? '--- Removed configuration files' : 'Error removing config files' );
            }else{
                $this->comment( '--- Configuration file not found' );
            }
        }

        if( $this->option('views') === 1 ) {
            // clear views
            $this->comment( '--- Removing view folder' );
            if( File::isDirectory( resource_path('views') . '/vendor/s2n-easyforms' ) ){
                $this->comment( '---- View folder found' );                
                $this->comment( File::deleteDirectory( resource_path('views') . '/vendor/s2n-easyforms' ) ? '--- Removed view folder' : 'Error removing view folder' );
            }else{
                $this->comment( '--- View folder not found' );
            }
        }

        if( $this->option('form-data') === 1 ) {
            // clear resources
            $this->comment( '--- Removing form data folder' );
            if( File::isDirectory( '/form_data') ){
                $this->comment( '---- View folder found' );                
                $this->comment( File::deleteDirectory( '/form_data' ) ? '--- Removed form data folder' : 'Error removing form data folder' );
            }else{
                $this->comment( '--- Form data folder not found' );
            }
        }
        
        $this->comment( 'PlusTimeIT EasyForms Uninstall Finished ===================================================================' );
        return 0;
    }
}
