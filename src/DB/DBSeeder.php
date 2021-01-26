<?php

namespace Second2None\EasyForms\App\DB;

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Database\Seeds\ErrorsSeeder;
use Second2None\EasyForms\Database\Seeds\FormFieldsSeeder;
use Second2None\EasyForms\Database\Seeds\FormsSeeder;
use Second2None\EasyForms\Database\Seeds\SettingsSeeder;

// use Second2None\EasyForms\App\DB\DBSeeder;
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
