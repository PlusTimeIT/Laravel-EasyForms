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
     */
    public function fieldLoad(Request $request): string
    {
        // load fields value
        $formClass = Axios::getFormClass($request->form_name);

        try {
            $load = $formClass::load($request);
            $field = collect($form->fields())->filter(fn ($field) => $field->getName() == $request->field_name)->first();
        } catch (\Exception $e) {
            return AxiosResponse::make()
                ->failed()
                ->data(config('app.debug') ? 'Form Error: '.$e->getMessage() : 'Unknown form data')
                ->toJson();
        }

        if (! $load->result()) {
            return AxiosResponse::make()
                ->failed()
                ->redirect($load->getRedirect())
                ->toJson();
        }

        $form = $load->getForm();

        return AxiosResponse::make()
            ->success()
            ->data($field->load($request->parent_value))
            ->toJson();
    }

    /**
     * Convert form name into class
     *
     * @return mixed
     */
    public static function getFormClass(string $formName): string
    {
        return config('easyforms.form.namespace').'\\'.str_replace('-', '\\', $formName);
    }

    /**
     * Retrieve form load request.
     */
    public function load(Request $request): string
    {
        $formClass = Axios::getFormClass($request->form_name);
        try {
            $load = $formClass::load($request);
        } catch (\Exception $e) {
            return AxiosResponse::make()
                ->failed()
                ->data(config('app.debug') ? 'Form Error: '.$e->getMessage() : 'Unknown form data')
                ->toJson();
        }

        if (! $load->result()) {
            return AxiosResponse::make()
                ->failed()
                ->redirect($load->getRedirect())
                ->toJson();
        }

        $form = $load->getForm();

        return AxiosResponse::make()
            ->success()
            ->data($form)
            ->redirect($load->getRedirect())
            ->toJson();
    }

    /**
     * Process the request.
     */
    public function process(Request $request): string
    {
        $formClass = Axios::getFormClass($request->form_name);
        // load form to get default values and any rules that may have changed.
        $load = $formClass::load($request);
        if (! $load->result()) {
            return AxiosResponse::make()
                ->failed()
                ->redirect($load->getRedirect())
                ->toJson();
        }

        $form = $load->getForm();
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
