<?php

namespace PlusTimeIT\EasyForms\App\Core\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;

use Response;
use Cache;
use Log;

// use PlusTimeIT\EasyForms\App\Core\Controllers\Pages;
class Pages extends Controller {
    public function examples( Request $request ){
        return view('vendor.s2n-easyforms.examples.example-1')->with( 'example' , ( object ) [ 'id' => 1 , 'name' => 'Example 1' ] );    
    }
    public function example_home( Request $request ){
        return view('vendor.s2n-easyforms.examples.example-home');    
    }

}