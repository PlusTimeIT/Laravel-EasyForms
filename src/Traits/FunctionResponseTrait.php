<?php
 
 namespace Second2None\EasyForms\App\Traits;
 
use Illuminate\Http\Request;

// Second2None\EasyForms\App\Traits;
 
trait FunctionResponseTrait {
 
    /**
     * Returns a response for function communicating
     *
     * @param Boolean $result
     * @param Mixed | Array | String $
     * @return Object $response 
     */

    public static function response( bool $result , $data ) {
        return ( object ) [ 'success' => $result , 'data' => $data ];
    }
 
}