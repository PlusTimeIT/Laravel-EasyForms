<?php

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Core\DB\Connector;
use Second2None\EasyForms\Core\Models\FormErrors;

use Schema;
use DB;

class ErrorsSeeder extends Seeder{

    public function run() {
        $errors = collect([
            [ 'type' => 'is_required' ,         'code' => '001' , 'message' => '{$slot_1} is a required field' ] ,
            [ 'type' => 'bigger_than_min' ,     'code' => '002' , 'message' => '{$slot_1} must be greater than {$slot_2}' ] ,
            [ 'type' => 'smaller_than_max' ,    'code' => '003' , 'message' => '{$slot_1} must be smaller than {$slot_2}' ] ,
            [ 'type' => 'valid_email' ,         'code' => '004' , 'message' => '{$slot_1} must be a valid email' ] ,
            [ 'type' => 'valid_integer' ,       'code' => '005' , 'message' => '{$slot_1} must be a valid integer' ] ,
            [ 'type' => 'valid_object' ,        'code' => '006' , 'message' => '{$slot_1} must be a valid object' ] ,
            [ 'type' => 'valid_array' ,         'code' => '007' , 'message' => '{$slot_1} must be a valid array' ] ,
            [ 'type' => 'valid_float' ,         'code' => '008' , 'message' => '{$slot_1} must be a valid decimal' ] ,
            [ 'type' => 'confirm' ,             'code' => '009' , 'message' => '{$slot_1} must match {$slot_2}' ] ,
            [ 'type' => 'confirm_type' ,        'code' => '010' , 'message' => '{$slot_1} must match {$slot_2}' ] ,
            [ 'type' => 'unique' ,              'code' => '011' , 'message' => '{$slot_1} must be unique' ] ,
        ])->map( function( $error ) {
            if( FormErrors::where( 'type' , $field['type'] )->first() ) return false;
            FormErrors::create( $field );
        });
    }
}