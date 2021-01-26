<?php

namespace  Second2None\EasyForms\App\Core\Controllers\Validation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Second2None\EasyForms\App\Models\FormErrors;

use Log;

class ErrorController extends Controller {

    public static function template_error_response( $validation_type , $error_code_prepend = 'DEV' , ...$slots ) {
        $type       = $validation_type['type'];
        $action     = is_array( $validation_type['field'] ) ? $validation_type['field'][0] : $validation_type['field'];
        $error      = FormErrors::where( 'type' , $type )->where( 'action' , $action )->first();

        // validation type not found in database
        if( ! $error ) {
            Log::error("DEV001 - Validation type $type and Field $action not found in database.");
            return ( object ) [ 'code' => 'DEV001' , 'message' => 'System Error' ];
        }

        $slot_counter = 0;
        foreach( $slots as $slot ) {
            $slot = ucfirst(str_replace('_', ' ', $slot));
            $slot_counter++;
            $error->message = str_replace( '{$slot_'.$slot_counter.'}' , $slot , $error->message );
        }

        return ( object ) [ 'code' => $error_code_prepend . $error->code , 'message' => $error->message ];
    }
    
    public static function get_prepend_error_code( $function_name , $area , $field ) {
        return strtoupper( substr( $area , 0 , 3 ) . substr( $function_name , 0 , 4 ) . substr( $field , 0 , 3 ) );
    }

    public static function get_form_code( $form_name , $area ) {
        return substr( md5( $form_name . $area ) , 0 , 5 );
    }

    public static function template_error_field( ) {
        return ( object ) [ 'code' => '',  'message' => '' ]; 
    }

}
