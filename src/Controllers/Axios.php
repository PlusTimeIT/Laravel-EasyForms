<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\{ActionForm, InputForm};
use PlusTimeIT\EasyForms\Elements\AxiosResponse;

class Axios extends Controller
{
    public function load(request $request)
    {
        $form_class = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        return AxiosResponse::make()->success()->data(( new $form_class() ))->toJson();
    }

    public function process(request $request)
    {
        $form_class = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        $form = new $form_class();
        $results = $form->validateRequest($request);
        if ($results->fails()) {
            return AxiosResponse::make()->failed()->data(collect($results->errors()))->toJson();
        }

        if (is_a($form, 'InputForm')) {
            return $this->processInputForm($form, $request);
        }
        return $this->processActionForm($form, $request);
    }

    public function processActionForm(ActionForm $form, request $request)
    {
        $process = $form->process($request);
        if ( ! $process->result()) {
            return AxiosResponse::make()->failed()->data($process->getData())->toJson();
        }
        return AxiosResponse::make()->success()->data($process->getData())->toJson();
    }

    public function processInputForm(InputForm $form, request $request)
    {
        $process = $form->process($request);
        if ( ! $process->result()) {
            return AxiosResponse::make()->failed()->data($process->getData())->toJson();
        }
        return AxiosResponse::make()->success()->data($process->getData())->toJson();
        //or 1 liner
        // return AxiosResponse::make()->setResult($process->getResult())->data($process->getData())->toJson();
    }
}
