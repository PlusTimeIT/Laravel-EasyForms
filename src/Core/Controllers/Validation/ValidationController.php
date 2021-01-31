<?php

namespace PlusTimeIT\EasyForms\App\Core\Controllers\Validation;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use  PlusTimeIT\EasyForms\App\Core\Controllers\Validation\ErrorController;

use PlusTimeIT\EasyForms\App\Models\Forms;

use Carbon\Carbon;
use URL;
use Log;

use App\Http\Controllers\core\Testing\Benchmark;

// use App\Core\Controllers\Validation\ValidationController;

class ValidationController extends Controller {

    public static function process_validate_request( request $request , forms $form ) {
        return self::validate_request( $request , $form , 'validation' );
    }

    public static function validate_request( request $request , forms $form , string $type = 'validation' ) {
        $error_fields = [];
        $validation_type = [ 'type' => $type , 'field' => '' ];
        $validation = collect( $form->field_data )->map( function( $field ) use ( $request , $form , $validation_type , &$error_fields ) {
            $error_code_prepend = ErrorController::get_prepend_error_code( ErrorController::get_form_code( $request->form_name , $form->area ) , $form->area , $field['name'] );
            if( isset( $field['rules']['required'] ) && $field['rules']['required'] ) {
                if( ! isset( $request->{$field['name']} ) ) {
                    $validation_type['field'] = ['is_required'];
                    $error_fields[ $field['name'] ][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] );
                }
            }

            // variable isn't present continue with next one
            if( ! isset( $request->{$field['name']} ) ) return $field;      

            // bigger than min
            if( isset( $field['rules']['min'] ) && $field['rules']['min'] ) {
                if( ( is_int( $request->{$field['name']} ) && $request->{$field['name']} < $field['rules']['min'] ) || strlen( $request->{$field['name']} ) < $field['rules']['min'] ) {
                    $validation_type['field'] = ['bigger_than_min'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] , $field['rules']['min'] );
                }
            }

            // smaller than max
            if( isset( $field['rules']['max'] ) && $field['rules']['max'] ) {
                if( ( ( is_int( $request->{$field['name']} ) && $request->{$field['name']} > $field['rules']['max'] ) || strlen( $request->{$field['name']} ) > $field['rules']['max'] ) ) {
                    $validation_type['field'] = ['smaller_than_max'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] , $field['rules']['max'] );
                }
            }

            // valid email
            if( isset( $field['rules']['email'] ) && $field['rules']['email'] ) {
                if( !filter_var( $request->{$field['name']} , FILTER_VALIDATE_EMAIL) ) {
                    $validation_type['field'] = ['valid_email'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] );
                }
            }

            // valid integer
            if( isset( $field['rules']['integer'] ) && $field['rules']['integer'] ) {
                if( preg_match( '/^[0-9]{1,9999}$/', $request->{$field['name']}) == false ) {
                    $validation_type['field'] = ['valid_integer'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name']);
                }
            }

            // valid float
            if( isset( $field['rules']['float'] ) && $field['rules']['float'] ) {
                if( ( ! is_float ( $request->{$field['name']} ) ) ) {
                    if( ! is_int( $request->{$field['name']} ) ){
                        $validation_type['field'] = ['valid_float'];
                        $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name']);
                    }
                }
            }

            // valid object
            if( isset( $field['rules']['object'] ) && $field['rules']['object'] ) {
                if( !is_object( $request->{$field['name']} ) ) {
                    $validation_type['field'] = ['valid_object'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name']);
                }
            }

            // valid array
            if( isset( $field['rules']['array'] ) && $field['rules']['array'] ) {
                if( ! is_array( $request->{$field['name']} ) ) {
                    $validation_type['field'] = ['valid_array'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] );
                }

                if( isset( $field['rules']['validations'] ) && is_array( $field['rules']['validations'] ) ) {
                    $validation_type['field'] = ['valid_article_object'];
                    foreach( $request->{$field['name']} as $index => $article ){
                        $array_validation = ( new CoreController )->__validate_request( ( object ) $article , $field['rules']['validations'] , $area , 'validation' );
                        if( is_array( $array_validation ) ) {
                            $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] );
                            foreach( $array_validation as $v_field => $v_details ){
                                $error_fields[$field['name']][] = [ $v_field => $v_details ];
                            }
                        }

                    }
                }
            }

            // confirm with another field
            if( isset( $field['rules']['confirm'] ) ) {
                if( isset( $request->{$field['rules']['confirm']} ) && $request->{$field['name']} != $request->{$field['rules']['confirm']} ) {
                    $validation_type['field'] = ['confirm'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] , $field['rules']['confirm'] );
                }
            }

            // confirm_type with another field
            if( isset( $field['rules']['confirm_type'] ) ) {
                if( isset( $request->{$field['rules']['confirm_type']} ) && $request->{$field['name']} !== $request->{$field['rules']['confirm_type']} ) {
                    $validation_type['field'] = ['confirm_type'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] , $field['rules']['confirm_type'] );
                }
            }

            // is value unique
            if( isset( $field['rules']['unique'] ) ) {
                $validation_type['field'] = ['unique'];
                $is_unique = $field['rules']['unique']['model']::query();
                
                if( isset( $field['rules']['unique']['columns'] ) && is_array( $field['rules']['unique']['columns'] ) ) {
                    foreach ( $field['rules']['unique']['columns'] as $column_details ) {
                        $is_unique->where( $column_details['column'] , $request->{$column_details['parameter']} );
                    }
                } else {
                    $is_unique->where( ( $field['rules']['unique']['columns'] ?? $field['rules']['unique']['column'] ) , $request->{$field['name']} );
                }

                if( isset( $field['rules']['unique']['self'] ) && $field['rules']['unique']['self'] ) {
                    if( isset( $field['rules']['unique']['self_type'] ) ) {
                        if( $field['rules']['unique']['self_type'] == 'parameter' ) {
                            $is_unique->where( 'id'  , '!=' , $request->{$field['rules']['unique']['self_parameter']} );
                        }elseif( $field['rules']['unique']['self_type'] == 'session' ){
                            $is_unique->where( 'id' , '!=' , session()->get( $request->{$field['rules']['unique']['self_session']} )->{$field['rules']['unique']['self_parameter']});
                        }elseif( $field['rules']['unique']['self_type'] == 'auth' ){
                            $is_unique->where( 'id' , '!=' , \Auth::user()->{$field['rules']['unique']['self_parameter']} );
                        }
                    }
                }

                if( $is_unique->first() ) {
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] );
                }
            }
            
            // valid date
            if( isset( $field['rules']['date'] ) && $field['rules']['date'] ) {
                $date = Carbon::createFromFormat( $field['rules']['date_format'] , $request->{$field['name']} );
                if( ! $date ) {
                    $validation_type['field'] = ['date'];
                    $error_fields[$field['name']][] = ErrorController::template_error_response( $validation_type , $error_code_prepend , $field['name'] , $field['rules']['date_format'] );
                }
            }

            return $field;
        });

        return ( count( $error_fields ) > 0 ) ? $error_fields : true;
    }

}
