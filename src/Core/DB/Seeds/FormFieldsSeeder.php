<?php

use Illuminate\Database\Seeder;

use Second2None\EasyForms\Core\DB\Connector;
use Second2None\EasyForms\Core\Models\FormFields;

use Schema;
use DB;

class FormFieldsSeeder extends Seeder{

    public function run() {
        $fields = collect([
            [
                'name'              => 'text',
                'default_value'     => '',
                'rules'             => array_merge(  FormFields::field_defaults( '' ) , [
                        'blank_value'   => true ,
                ]) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'password',
                'default_value'     => '',
                'rules'             => array_merge(  FormFields::field_defaults( '' ) , [
                        'blank_value'   => true ,
                ]) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'number',
                'default_value'     => 0 ,
                'rules'             => array_merge(  FormFields::field_defaults( 0 ) , [
                        'min'           => 0 ,
                        'max'           => 999 ,
                        'integer'       => true ,
                ]) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'text-area',
                'default_value'     => '' ,
                'rules'             => FormFields::field_defaults( '' ) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'checkbox',
                'default_value'     => '' ,
                'rules'             => FormFields::field_defaults( '' ) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'checkbox-group',
                'default_value'     => '' ,
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                        'multiple'      => false ,
                        'any_field'     => false
                ]) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'select',
                'default_value'     => '',
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                        'multiple'      => false ,
                        'items'         => [] ,
                        'item_text'     => '' ,
                        'item_value'    => '' ,
                ]) ,
                'status'            => 1 ,
            ] ,
            [
                'name'              => 'file-input',
                'default_value'     => '',
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                        'accept'        => '.png' 
                ]) ,
                'status'            => 1 ,
            ],
            [
                'name'              => 'date',
                'default_value'     => '',
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                ]) ,
                'status'            => 1 ,
            ],
            [
                'name'              => 'time',
                'default_value'     => '',
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                ]) ,
                'status'            => 1 ,
            ],
            [
                'name'              => 'hidden',
                'default_value'     => '',
                'rules'             => array_merge( FormFields::field_defaults( '' ) , [
                        'hidden'        =>  true ,
                ]) ,
                'status'            => 1 ,
            ],
            [
                'name'              => 'title',
                'default_value'     => '',
                'rules'             => FormFields::field_defaults( '' ) ,
                'status'            => 1 ,
            ],
            [
                'name'              => 'spacer',
                'default_value'     => '',
                'rules'             => FormFields::field_defaults( '' ) ,
                'status'            => 1 ,
            ]
        ])->map( function( $field ) {
            if( FormFields::where( 'name' , $field['name'] )->first() ) return false;
            FormFields::create( $field );
        });
    }
}