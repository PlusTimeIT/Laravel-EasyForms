<?php

namespace PlusTimeIT\EasyForms\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PlusTimeIT\EasyForms\Elements\AxiosResponse;

class Axios extends Controller
{
    public function load(request $request)
    {
        $form_class = config('easyforms.form-namespace').'\\'.str_replace('-', '\\', $request->form_name);

        return AxiosResponse::make()
            ->success()
            ->data(( new $form_class() ))
            ->toJson();
    }

    public function process(request $request)
    {
        $form_class = config('easyforms.form-namespace').'\\'.str_replace('-', '\\', $request->form_name);
        $form = new $form_class();
        $results = $form->validateRequest($request);
        if ($results->fails()) {
            return AxiosResponse::make()
                ->failed()
                ->data(collect($results->errors()))
                ->toJson();
        }

        $process = $form->process($request);
        if (!$process->result()) {
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
