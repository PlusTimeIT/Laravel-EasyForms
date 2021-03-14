<?php
namespace PlusTimeIT\EasyForms\Forms;

use Carbon\Carbon;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Axios, Button, Header, Icon, RadioItem, SelectItem};
use PlusTimeIT\EasyForms\Fields\{AutoCompleteField, CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, RadioGroupField, SelectField, TextField, TextareaField};
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
                        'maxlength' => 20,
                        'counter' => TRUE ,
                        'help' => 'This is your Username!',
                    ]
                ),
                new PasswordField(
                    'password',
                    [
                        'order' => 1,
                        'label' => 'Password',
                        'maxlength' => 5,
                        'counter' => TRUE ,
                        'help' => 'This is your Password!',
                    ]
                ),
                new TextField(
                    'email',
                    [
                        'order' => 2,
                        'label' => 'Email',
                        'help' => 'Leave your email!',
                    ]
                ),
                new FileInputField(
                    'resume',
                    [
                        'order' => 5,
                        'label' => 'Upload your resume in .doc or .pdf',
                        'accept' => '.doc|.pdf',
                        'help' => 'Upload your resume!',
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
                    'notes',
                    [
                        'order' => 4,
                        'label' => 'Account Notes',
                        'clearable' => TRUE,
                    ]
                ),
                new CheckboxField(
                    'terms',
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
                        'items' => [
                            new SelectItem(0, 'John Doe') ,
                            new SelectItem(1, 'Sammy Did') ,
                            new SelectItem(2, 'Smithy McSmithy') ,
                            new SelectItem(3, 'HELLO WORLD INC.') ,
                        ],
                        'value' => '',
                    ]
                ),
                new AutoCompleteField(
                    'rating',
                    [
                        'order' => 10,
                        'label' => 'Leave us a rating',
                        'items' => [
                            new SelectItem(0, '1 Star') ,
                            new SelectItem(1, '2 Star') ,
                            new SelectItem(2, '3 Star') ,
                            new SelectItem(3, '4 Star') ,
                            new SelectItem(4, '5 Star') ,
                        ],
                        'value' => '',
                    ]
                ),
                new RadioGroupField(
                    'What\'s the colour of the sky?',
                    [
                        'order' => 11,
                        'label' => 'Pick the colour of the sky?',
                        'items' => [
                            new RadioItem('The sky is blue', 'blue', 'blue') ,
                            new RadioItem('The sky is red', 'red', 'red') ,
                            new RadioItem('The sky is pink', 'pink', 'pink') ,
                        ],
                        'value' => '',
                    ]
                ),
            ])
            ->setAction(new Action(
                [
                    new Button(
                        'process',
                        'Register',
                        'primary',
                        new Icon('mdi-star', 'Register'),
                        1
                    ),
                    new Button(
                        'reset',
                        'Reset Form',
                        'secondary',
                        new Icon('mdi-refresh', 'Reset the form fields'),
                        0
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
