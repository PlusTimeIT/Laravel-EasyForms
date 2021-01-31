<?php

namespace PlusTimeIT\EasyForms\App\Core\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;

use Response;
use Cache;
use Log;

// use PlusTimeIT\EasyForms\App\Core\Controllers\Misc;
class Misc extends Controller {
    
    public static function underscoreToCamelCase( $string ){
        $pieces = explode( '_' , $string );
        for( $i = 1; $i <= count( $pieces ) - 1; $i++ ){
            $pieces[$i] = ucfirst( $pieces[$i] );
        }
        return implode( '' , $pieces );
    }

}