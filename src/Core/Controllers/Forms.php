<?php

namespace PlusTimeIT\EasyForms\App\Core\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use PlusTimeIT\EasyForms\App\Core\LoadForm;
use PlusTimeIT\EasyForms\App\Objects\EasyForm;
use PlusTimeIT\EasyForms\App\Core\Controllers\Misc;

use App\Http\Controllers\Controller;

use Log;

// use PlusTimeIT\EasyForms\App\Core\Controllers\Forms;
class Forms extends Controller {
    
    public static function save_form_fields( $request ) {
        //$form = FormsModel::where( 'name' , $request->form_name )->where( 'area' , $request->area )->first();
        $form_details = explode( '::' , $form->callback_functions->process );
        return $form_details[0]::{$form_details[1]}( $form );
    }

    public static function loadFormFields( request $request , easyform $form ) {
        return self::getFormFieldsForVue( 
            $form , 
            ( $request->populate ) ? self::getValuesForForm( $request , $form ) : collect([]) 
        );
    }

    public static function getValuesForForm( request $request , easyform $form ){
        if( is_null( $form->callback_functions->fill ) ) return collect([]);
        $form_details = explode( '::' , $form->callback_functions->fill );
        return $form_details[0]::{$form_details[1]}( $request , $form );
    }

    public static function getFormFieldsForVue( easyform $form , collection $values , array $custom = [] ) {
        return self::formatFieldsForVue( $form->getFields() , $values );
    }

    public static function formatFieldsForVue( collection $fields , collection $values ) {
        $merged_fields = $fields->merge( $values )->map( function( $field ) use ( $values ) {
            $rules = $field->getRules();
            if( ! $rules ) return false;
            
            // Generate the label
            $rules->label = $rules->label !== '' ? $rules->label : ucfirst( str_replace( '_', ' ', $field->getName() ) );

            // Load from model
            if( isset( $rules->items ) &&  isset( $rules->item_type ) &&  $rules->item_type == 'Model' )
                $rules->items = $rules->item::select( $rules->item_select )->get();
            return self::getFieldVueTemplate(
                $field->getType() ,
                $field->getName() ,
                $field->getOrder() ,
                $field->getCols() ,
                $rules ,
            );
        })->reject(function ($value) {
            return $value === false;
        })->keyBy( function( $field ) {
            return Misc::underscoreToCamelCase( $field->validation );
        })->sortBy( 'order' );

        return (object) $merged_fields->all();
    }

    public static function getFieldVueTemplate( string $field_type = '' , string $validation = '' , int $order , int $cols , object $rules ) {
        return ( object ) [
            'type'          => $field_type ,
            'validation'    => $validation ,
            'order'         => $order ,
            'cols'          => $cols ,
            'rules'         => $rules ,
        ];
    }

}