<?php

namespace Second2None\EasyForms\Core\DB\Seeds;

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Core\DB\Connector;

use Second2None\EasyForms\Core\Models\Forms;
use Second2None\EasyForms\Core\Models\FormFields;

use Schema;
use DB;

// use Second2None\EasyForms\Core\DB\Seeds\FormsSeeder;
class FormsSeeder extends Seeder{

    public function run() {
        $fields = collect([
            [ 
                'name'                  => 'example_form_1' ,
                'area'                  => 'Admin' ,
                'field_data'            => [
                    ( object ) [
                        'name'          => 'text_field_example' ,
                        'order'         => 0 ,
                        'cols'          => 12 ,
                        'type'          => 'hidden' ,
                        'rules'         => array_merge( FormFields::get_default_rules_by_name( 'hidden' ) , [
                                'required'      => true ,
                        ] ) ,
                    ] ,
                    ( object ) [
                        'name'          => 'number_field_exmaple' ,
                        'order'         => 1 ,
                        'cols'          => 12 ,
                        'type'          => 'number' ,
                        'rules'         => array_merge( FormFields::get_default_rules_by_name( 'number' ) , [
                                'required'      => false ,
                                'integer'       => true ,
                        ] ) ,
                    ] ,
                    ( object ) [
                        'name'          => 'select_field_example' ,
                        'order'         => 2 ,
                        'type'          => 'select' ,
                        'rules'         => array_merge( FormFields::get_default_rules_by_name( 'select' ) , [
                                'required'      => true ,
                                'items'         => [ 
                                    [ 'id' => 0 ,  'name' => 'Option 1' ] ,
                                    [ 'id' => 1 ,  'name' => 'Option 2' ] ,
                                ] ,
                        ] ) ,
                    ] ,
                ],
                'custom_data'          => ( object ) [ 
                    'button'  => ( object ) [
                        'text'      => 'process' ,
                        'colour'    => 'primary' ,
                    ],
                    'axios' => ( object ) [
                        'expecting_results'     => false ,
                        'display_notification'  => true ,
                        'headers'               => ( object ) [] ,
                        'redirect'              => false
                    ]
                ] ,
                'status'                => 1 ,
                'callback_functions'    => Forms::get_callback_function_template(
                    '\\Second2None\\EasyForms\\Core\\DB\\Connector::example_fill_callback' ,
                    '\\Second2None\\EasyForms\\Core\\DB\\Connector::example_process_callback'
                ) ,
            ] ,
        ])->each( function( $field ) {
            if( ! Forms::where( 'name' , $field['name'] )->first() )
                Forms::create( $field );
        });
    }
}