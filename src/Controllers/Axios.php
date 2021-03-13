<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Elements\AxiosResponse;

class Axios extends Controller
{
    public function load(request $request)
    {
        $form_class = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        return ( new AxiosResponse(TRUE, ( new $form_class() )) )->toJson();
    }

    public function process(request $request)
    {
        return NULL;
    }
}
