<?php

namespace Second2None\EasyForms\Core\DB;

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Core\DB\Seeds\ErrorsSeeder;
use Second2None\EasyForms\Core\DB\Seeds\FormFieldsSeeder;
use Second2None\EasyForms\Core\DB\Seeds\FormsSeeder;
use Second2None\EasyForms\Core\DB\Seeds\SettingsSeeder;

// use Second2None\EasyForms\Core\DB\DBSeeder;

class DBSeeder extends Seeder {

    public function run(){
        $this->call( [ 
            ErrorsSeeder::class ,
            FormFieldsSeeder::class ,
            FormsSeeder::class ,
            SettingsSeeder::class ,
        ] );
    }
    
}
