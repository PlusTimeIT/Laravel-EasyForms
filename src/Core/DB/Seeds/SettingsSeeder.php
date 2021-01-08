<?php

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Core\DB\Connector;
use Second2None\EasyForms\Core\Models\Settings;

use Schema;
use DB;

class SettingsSeeder extends Seeder{

    public function run() {
        $settings = collect([
            [ 
                'name'      => 'initial_setup' ,
                'value'     => 0 ,
                'category'  => 'setup' ,
                'tab'       => 'setup' ,
                'status'    => 1 ,
                'editable'  => 0 
            ],
        ])->map( function( $setting ) {
            if( Settings::where( 'name' , $setting['name'] )->where( 'category' , $setting['category'] )->where( 'tab' , $setting['tab'] )->first() ) return false;
            Settings::create( $setting );
        });
    }
}