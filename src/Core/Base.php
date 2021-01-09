<?php

namespace Second2None\EasyForms\Core;

use Second2None\EasyForms\Core\DB\Connector;
use Second2None\EasyForms\Core\Models\Settings;

use DB;
use File;
use Schema;
use Log;

// use Second2None\EasyForms\Core\Base;

class Base {

        public static function initiate_check(){

            if ( ! Schema::hasTable( Connector::$settings_table ) || ! Schema::hasTable( Connector::$forms_table ) || ! Schema::hasTable( Connector::$form_fields_table ) || ! Schema::hasTable( Connector::$errors_table ) ) {
                throw new \Exception( 'Must run migration and seeder for database tables' );
            }
            
            $setup_check = Settings::where( 'name' , 'initial_setup' )->first();
                throw new \Exception( 'Error with seeding - run seeder' );
        }

        public static function is_vendor_published(){
            return File::exists( config_path( 'easy_forms.php' ) );
        }

}