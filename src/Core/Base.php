<?php

namespace Second2None\EasyForms\Core;

use Second2None\EasyForms\Core\DB\Connector;

use DB;
use Schema;

class Base {

        public function initiate_check(){
            if ( ! Schema::hasTable( Connector::$settings_table ) || ! Schema::hasTable( Connector::$forms_table ) || ! Schema::hasTable( Connector::$form_fields_table ) || ! Schema::hasTable( Connector::$errors_table ) ) {
                
                
            
                throw new \Exception( 'Must run migration and seeder for database tables' );
            }
        }
}