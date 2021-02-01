<?php

namespace PlusTimeIT\EasyForms\App\Core\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use PlusTimeIT\EasyForms\App\Core\Controllers\Forms;
use PlusTimeIT\EasyForms\App\Core\LoadForm;

use Response;
use Cache;
use Log;

// use PlusTimeIT\EasyForms\App\Core\Controllers\Axios;
class Axios extends Controller {
    
    public function loadForm( Request $request ){
        $form = LoadForm::loadForm( $request->form_name );
        if( ! $form ){
            return response()->json([ 'success' => false , 'data' => 'Failed to load form' ]);
        }
        $fields = Forms::loadFormFields( $request , $form );
        if( ! $fields ) {
            return response()->json([ 'success' => false , 'data' => 'Failed to load form' ]);
        }
        return response()->json([ 'success' => true , 'data' => [ 'form' => $form , 'fields' => $fields ] ]);
    }

}