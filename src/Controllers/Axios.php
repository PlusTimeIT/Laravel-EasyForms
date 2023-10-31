<?php

namespace PlusTimeIT\EasyForms\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PlusTimeIT\EasyForms\Elements\AxiosResponse;

/**
 * Controller handling Axios requests related to loading / processing forms and/or fields.
 */
class Axios extends Controller
{
    /**
     * Retrieve field load request.
     *
     * @return mixed
     */
    public function fieldLoad(Request $request): string
    {
        // load fields value
        $formClass = config('easyforms.form-namespace').'\\'.str_replace('-', '\\', $request->form_name);

        $form = new $formClass();
        $field = collect($form->fields())->filter(fn ($field) => $field->getName() == $request->field_name)->first();

        return AxiosResponse::make()
            ->success()
            ->data($field->load($request->parent_value))
            ->toJson();
    }

    /**
     * Retrieve form load request.
     *
     * @return mixed
     */
    public function load(Request $request): string
    {
        $form = config('easyforms.form-namespace').'\\'.str_replace('-', '\\', $request->form_name);
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

    /**
     * Process the request.
     *
     * @return mixed
     */
    public function process(Request $request): string
    {
        $formClass = config('easyforms.form-namespace').'\\'.str_replace('-', '\\', $request->form_name);
        // fill required to get default values and any rules that may have changed.
        $form = call_user_func([$formClass, 'fill'], $request);
        $results = $form->validateRequest($request);
        if ($results->fails()) {
            return AxiosResponse::make()
                ->failed()
                ->data(['validation_errors' => collect($results->errors())])
                ->toJson();
        }

        $process = $form->process($request);
        if (! $process->result()) {
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
