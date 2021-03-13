<?php
namespace PlusTimeIT\EasyForms\Forms;

use Carbon\Carbon;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Axios, Button, Header, Icon, SelectItem};
use PlusTimeIT\EasyForms\Fields\{CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, SelectField, TextField, TextareaField};
use PlusTimeIT\EasyForms\Traits\ConvertTrait;

class ExampleForm2 extends InputForm
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
                ),
                new PasswordField(
                    'password',
                    [
                        'order' => 1,
                        'label' => 'Password',
                    ]
                ),
                new TextField(
                    'email',
                    [
                        'order' => 2,
                        'label' => 'Email',
                    ]
                ),
                new FileInputField(
                    'resume',
                    [
                        'order' => 5,
                        'label' => 'Upload your resume in .doc or .pdf',
                        'accept' => '.doc|.pdf',
                    ]
                ),
                new NumberField(
                    'experience',
                    [
                        'order' => 3,
                        'label' => 'Years Experience',
                        'min' => 1,
                        'max' => 150,
                    ]
                ),
                new TextareaField(
                    'note',
                    [
                        'order' => 4,
                        'label' => 'Account Notes',
                    ]
                ),
                new CheckboxField(
                    'note',
                    [
                        'order' => 6,
                        'label' => 'Do you accept the current terms and conditions',
                    ]
                ),
                new HiddenField(
                    'datetime',
                    [
                        'order' => 99,
                        'label' => 'datetime',
                        'value' => Carbon::now()->toIso8601String(),
                    ]
                ),
                new SelectField(
                    'favourite_fruit',
                    [
                        'order' => 8,
                        'label' => 'What\'s your favourite fruit?',
                        'item_text' => 'value' ,
                        'item_value' => 'id' ,
                        'items' => [
                            new SelectItem(0, 'Chicken') ,
                            new SelectItem(1, 'Banana') ,
                            new SelectItem(2, 'Watermelon') ,
                            new SelectItem(3, 'Grapes') ,
                            new SelectItem(4, 'Orange') ,
                        ],
                        'value' => '',
                    ]
                ),
                new SelectField(
                    'customer_select',
                    [
                        'order' => 9,
                        'multiple' => TRUE ,
                        'any_field' => TRUE ,
                        'label' => 'Select Customers',
                        'item_text' => 'value' ,
                        'item_value' => 'id' ,
                        'items' => [
                            new SelectItem(0, 'John Doe') ,
                            new SelectItem(1, 'Sammy Did') ,
                            new SelectItem(2, 'Smithy McSmithy') ,
                            new SelectItem(3, 'HELLO WORLD INC.') ,
                        ],
                        'value' => '',
                    ]
                ),
            ])
            ->setAction(new Action(
                [
                    new Button(
                        'Register',
                        'primary',
                        new Icon('mdi-star', 'Register')
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

    protected $name = 'ExampleForm2';

    protected $title = 'Example Form 2 Title';

    use ConvertTrait;
}
