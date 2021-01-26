<?php

namespace Second2None\EasyForms\Database\Seeds;

use Illuminate\Database\Seeder;

use Second2None\EasyForms\App\DB\Connector;
use Second2None\EasyForms\App\Models\Settings;

use Schema;
use DB;
use Log;

// use Second2None\EasyForms\Database\Seeds\SettingsSeeder;
class SettingsSeeder extends Seeder{

    public function run() {
        $settings = collect([
            [ 
                'name'      => 'initial_setup' ,
                'value'     => '0' ,
                'category'  => 'setup' ,
                'tab'       => 'setup' ,
                'status'    => 1 ,
                'editable'  => 0 
            ] ,
        ])->each( function( $setting ) {
            if( ! Settings::where( 'name' , $setting['name'] )->where( 'category' , $setting['category'] )->where( 'tab' , $setting['tab'] )->first() )
                Settings::create( $setting );
        });
    }
}