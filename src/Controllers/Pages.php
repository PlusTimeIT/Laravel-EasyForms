<?php
namespace PlusTimeIT\EasyForms\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Controllers\Users;

class Pages extends Controller
{
    public function example(request $request)
    {
        $example_id = $request->example_id ?? 1;
        $form_class = "{$this->form_namespace}ExampleForm{$example_id}";

        if( $example_id < 4 ){
            return view('vendor.plustime-it.laravel-easyforms.examples.example-template')
            ->with('load', $example_id == 1 ? 'page' : 'axios')
            ->with('example', $example_id == 1 ? (new $form_class())->preFill() : (new $form_class()));
        }

        $userList = Users::getAllUsers();
        return view('vendor.plustime-it.laravel-easyforms.examples.example-' . $example_id)
            ->with('load', 'axios')
            ->with('userList',  $userList )
            ->with('example', new $form_class());
    }

    public function exampleHome(request $request)
    {
        return view('vendor.plustime-it.laravel-easyforms.examples.example-home');
    }

    protected $form_namespace = 'PlusTimeIT\\EasyForms\\Forms\\';
}
