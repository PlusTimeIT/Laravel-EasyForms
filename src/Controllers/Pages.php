<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function example(request $request)
    {
        $example_id = $request->example_id ?? 1;
        $form_class = "{$this->form_namespace}ExampleForm{$example_id}";
        return view('vendor.plustime-it.laravel-easyforms.examples.example-template')
            ->with('load', $example_id == 1 ? 'page' : 'axios')
            ->with('example', ( new $form_class() ));
    }

    public function exampleHome(request $request)
    {
        return view('vendor.plustime-it.laravel-easyforms.examples.example-home');
    }

    protected $form_namespace = 'PlusTimeIT\\EasyForms\\Forms\\';
}
