<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class Axios extends Controller
{
    public function load(request $request)
    {
        $form_class = $this->form_namespace . str_replace('-', '\\', $request->form_name);
        Log::debug(( new $form_class() )->getFields());
        return  ( new $form_class() )->toJson();
    }

    public function process(request $request)
    {
        return NULL;
    }

    protected $form_namespace = 'PlusTimeIT\\EasyForms\\Forms\\';
}
