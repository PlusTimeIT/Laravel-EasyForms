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
        return ( new AxiosResponse(TRUE, ( new $form_class() ), FALSE) )->toJson();
    }

    public function process(request $request)
    {
        $form_class = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        $form = new $form_class();
        $results = $form->validateRequest($request);
        if ($results->fails()) {
            return ( new AxiosResponse(FALSE, collect($results->errors()), FALSE))->toJson();
        }
        return ( new AxiosResponse(TRUE, 'Successfully saved form!', FALSE))->toJson();
    }
}
