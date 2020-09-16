<?php
 
 namespace Second2None\EasyForms\Core\Traits;
 
use Illuminate\Http\Request;

// Second2None\EasyForms\Traits;
 
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