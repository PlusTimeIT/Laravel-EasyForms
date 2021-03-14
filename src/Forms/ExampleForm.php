<?php
namespace PlusTimeIT\EasyForms\Forms;

use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Axios, Button, Header, Icon};
use PlusTimeIT\EasyForms\Fields\{PasswordField, TextField};
use PlusTimeIT\EasyForms\Traits\ConvertTrait;

class ExampleForm extends InputForm
{
    public function __construct()
    {
        $this
            ->setFields([
                new TextField(
                    'username',
                    [
                        'order' => 0,
                        'label' => 'Username',
                    ]
                ) ,
                new PasswordField(
                    'password',
                    [
                        'order' => 1,
                        'label' => 'Password',
                    ]
                ) ,
            ])
            ->setAction(new Action(
                [
                    new Button(
                        'process',
                        'Login',
                        'primary',
                        new Icon('mdi-login', 'Login to the app.'),
                        0
                    ),
                    new Button(
                        'reset',
                        'Reset Form',
                        'secondary',
                        new Icon('mdi-refresh', 'Reset the form fields'),
                        1
                    ),
                    new Button(
                        'cancel',
                        'Cancel',
                        'secondary',
                        new Icon('mdi-cancel', 'Cancel the form'),
                        2
                    ),
                ],
                new Axios([
                    'multi_part' => FALSE ,
                    'expecting_results' => TRUE ,
                    'headers' => [] ,
                    'notification' => TRUE,
                ])
            ));
        return $this;
    }

    protected $name = 'ExampleForm';

    protected $title = 'Example Form Title';

    use ConvertTrait;
}
