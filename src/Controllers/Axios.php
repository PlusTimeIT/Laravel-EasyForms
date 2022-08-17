<?php
namespace PlusTimeIT\EasyForms\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PlusTimeIT\EasyForms\Elements\AxiosResponse;

class Axios extends Controller
{
    public function fieldLoad(request $request)
    {
        // load fields value
        $form = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);

        $form = new $form();
        $field = collect($form->fields())->filter(fn($field) => $field->getName() == $request->field_name)->first();
        return AxiosResponse::make()
            ->success()
            ->data($field->load($request->dependsOn))
            ->toJson();
    }

    public function load(request $request)
    {
        $form = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        try {
            $formModel = call_user_func([$form, 'fill'], $request);
        } catch (\Exception $e) {
            return AxiosResponse::make()
                ->success()
                ->data('Unknown form data')
                ->toJson();
        }
        return AxiosResponse::make()
            ->success()
            ->data($formModel)
            ->toJson();
    }

    public function process(request $request)
    {
        $form = config('easyforms.form-namespace') . '\\' . str_replace('-', '\\', $request->form_name);
        $form = new $form();
        $results = $form->validateRequest($request);
        if ($results->fails()) {
            return AxiosResponse::make()
                ->failed()
                ->data(collect($results->errors()))
                ->toJson();
        }

        $process = $form->process($request);
        if ( ! $process->result()) {
            return AxiosResponse::make()
                ->failed()
                ->data($process->getData())
                ->redirect($process->getRedirect())
                ->toJson();
        }

        return AxiosResponse::make()
            ->success()
            ->data($process->getData())
            ->redirect($process->getRedirect())
            ->toJson();
    }
}
