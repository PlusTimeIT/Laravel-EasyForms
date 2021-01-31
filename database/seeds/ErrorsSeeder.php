<?php

namespace PlusTimeIT\EasyForms\Database\Seeds;

use Illuminate\Database\Seeder;

use PlusTimeIT\EasyForms\App\DB\Connector;
use PlusTimeIT\EasyForms\App\Models\Errors;

use Schema;
use DB;

// use PlusTimeIT\EasyForms\Database\Seeds\ErrorsSeeder;
class ErrorsSeeder extends Seeder{

    public function run() {
        $errors = collect([
            [ 
                'type' => 0 ,
                'action' => 'is_required' ,
                'code' => '001' , 
                'message' => '{$slot_1} is a required field' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'bigger_than_min' ,
                'code' => '002' , 
                'message' => '{$slot_1} must be greater than {$slot_2}' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'smaller_than_max' ,
                'code' => '003' , 
                'message' => '{$slot_1} must be smaller than {$slot_2}' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'valid_email' ,
                'code' => '004' , 
                'message' => '{$slot_1} must be a valid email' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'valid_integer' ,
                'code' => '005' , 
                'message' => '{$slot_1} must be a valid integer' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'valid_object' ,
                'code' => '006' , 
                'message' => '{$slot_1} must be a valid object' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'valid_array' ,
                'code' => '007' , 
                'message' => '{$slot_1} must be a valid array' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'valid_float' ,
                'code' => '008' , 
                'message' => '{$slot_1} must be a valid decimal' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'confirm' ,
                'code' => '009' , 
                'message' => '{$slot_1} must match {$slot_2}' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'confirm_type' ,
                'code' => '010' , 
                'message' => '{$slot_1} must match {$slot_2}' 
            ] ,
            [ 
                'type' => 0 ,
                'action' => 'unique' ,
                'code' => '011' , 
                'message' => '{$slot_1} must be unique' 
            ] ,
        ])->each( function( $field ) {
            if( ! Errors::where( 'type' , $field['type'] )->first() )
                Errors::create( $field );
        });
    }
}