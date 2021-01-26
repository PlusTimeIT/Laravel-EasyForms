<?php

namespace Second2None\EasyForms\App\Core;

use Second2None\EasyForms\App\DB\Connector;
use Second2None\EasyForms\App\Models\Settings;

use DB;
use File;
use Schema;
use Log;

// use Second2None\EasyForms\App\Core\Base;
class Base {

        protected $migrations = [
            '2020_08_30_024400_create_easy_forms_settings' ,
            '2020_08_30_024400_create_easy_forms' ,
            '2020_08_30_024400_create_easy_forms_fields' ,
            '2020_08_30_024400_create_easy_forms_errors' ,
        ];

        public static function is_vendor_published(){
            return File::exists( config_path( 'easy_forms.php' ) );
        }

        public static function is_initial_setup_complete(){
            // do the tables exists
            if ( 
                ! Schema::hasTable( Connector::SETTINGS_TABLE ) || 
                ! Schema::hasTable( Connector::FORMS_TABLE ) || 
                ! Schema::hasTable( Connector::FORMFIELDS_TABLE ) || 
                ! Schema::hasTable( Connector::ERROR_TABLE ) 
            ) {
                return false;
            }

            // has the initial setup been run
            $settings = Settings::where( 'name' , 'initial_setup' )->first();
            return ( $settings && $settings->value == 1 ) ? true : false;
        }

        public static function get_directories(){
            $package_directories = [];
            $package_directories[ 'base' ]        = dirname( dirname( dirname( __FILE__ ) ) );
            
            $package_directories[ 'config' ]      = $package_directories[ 'base' ] . '\config';
            $package_directories[ 'database' ]    = $package_directories[ 'base' ] . '\database';
            $package_directories[ 'public' ]      = $package_directories[ 'base' ] . '\public';
            $package_directories[ 'resources' ]   = $package_directories[ 'base' ] . '\resources';
            $package_directories[ 'routes' ]      = $package_directories[ 'base' ] . '\routes';
            $package_directories[ 'src' ]         = $package_directories[ 'base' ] . '\src';
            $package_directories[ 'views' ]       = $package_directories[ 'base' ] . '\views';

            $package_directories[ 'migrations' ]  = $package_directories[ 'database' ] . '\migrations';
            $package_directories[ 'seeds' ]       = $package_directories[ 'database' ] . '\seeds';

            $package_directories[ 'assets' ]      = $package_directories[ 'resources' ] . '\assets';

            return $package_directories;
        }

}