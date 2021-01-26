<?php

namespace Second2None\EasyForms\App\Commands;

use Illuminate\Console\Command;

use Second2None\EasyForms\App\Core\Base;

use Artisan;
use File;

// use Second2None\EasyForms\App\Commands\Uninstall;
class Uninstall extends Command {

    protected $signature    = 'SEF:uninstall {--database=1} {--config=1} {--views=1} {--resources=1}';
    protected $description  = 'Second2None Easy Forms Uninstaller removes everything created by Second2None EasyForms.';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        
        $this->comment( 'Second2None EasyForms Uninstall Starting ===================================================================' );
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

        if( $this->option('resources') === 1 ) {
            // clear resources
            $this->comment( '--- Removing resources folder' );
            if( File::isDirectory( resource_path('assets/vendor/s2n-easyforms') ) ){
                $this->comment( '---- View folder found' );                
                $this->comment( File::deleteDirectory( resource_path('assets/vendor/s2n-easyforms') ) ? '--- Removed resources folder' : 'Error removing resources folder' );
            }else{
                $this->comment( '--- Resources folder not found' );
            }
        }

        if( $this->option('database') === 1 ) {
            // clear databases
            $this->comment( '--- Removing databases' );

            collect( Base::$migrations )->each( function( $migration ){
                $this->comment( '--- Attempting to rollback: ' . $migration );
                Artisan::call( 'migrate:rollback --path=' . database_path( '/migrations/' ) . '/' . $migration );
                if( File::Exists( database_path( '/migrations/' ) . '/' . $migration ) ){
                    $this->comment( '---- Migration file found' );                
                    $this->comment( File::delete( database_path( '/migrations/' ) . '/' . $migration ) ? '--- Removed migration file: '  . $migration : 'Error removing migration file: '  . $migration );
                }else{
                    $this->comment( '--- Migration file not found' );
                }
            });

            $this->comment( '--- Removed databases' );
        }
        
        $this->comment( 'Second2None EasyForms Uninstall Finished ===================================================================' );
        return 0;
    }
}
