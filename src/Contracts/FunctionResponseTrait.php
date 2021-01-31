<?php
 
 namespace PlusTimeIT\EasyForms\App\Contracts;
 
use Illuminate\Http\Request;

// use PlusTimeIT\EasyForms\App\Contracts\FunctionResponseTrait;
 
trait FunctionResponseTrait {
 
    /**
     * Returns a response for function communicating
     *
     * @param Boolean $result
     * @param Mixed | Array | String $
     * @return Object $response 
     */

    public static function response( bool $result , mixed $data ) {
        return ( object ) [ 'success' => $result , 'data' => $data ];
    }
 
}