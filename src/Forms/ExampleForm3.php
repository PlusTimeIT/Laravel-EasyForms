<?php
namespace PlusTimeIT\EasyForms\Forms;

use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Alert, Axios, Button, Header, Icon, MaskItem, RadioItem, RuleItem, SelectItem};
use PlusTimeIT\EasyForms\Fields\{AutoCompleteField, CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, RadioGroupField, SelectField, TextField, TextareaField};
use PlusTimeIT\EasyForms\Traits\Transformable;

class ExampleForm3 extends InputForm
{
    public function __construct()
    {
        $this
            ->setFields([
                new TextField(
                    'mobile1',
                    [
                        'order' => 0,
                        'label' => 'Mobile Number',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => '04##-###-###',
                        'help' => 'Number format 1',
                    ]
                ),
                new TextField(
                    'mobile2',
                    [
                        'order' => 0,
                        'label' => 'Mobile Number',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => '+61 4########',
                        'help' => 'Number format 2',
                    ]
                ),
                new TextField(
                    'mobile3',
                    [
                        'order' => 0,
                        'label' => 'Mobile Number',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => '(+61) 4########',
                        'help' => 'Number format 3',
                    ]
                ),
                new TextField(
                    'quick_date',
                    [
                        'order' => 0,
                        'label' => 'Quick Date D/M/Y',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => '##/##/####',
                        'help' => 'Type a date quickly',
                    ]
                ),
                new TextField(
                    'quick_time',
                    [
                        'order' => 0,
                        'label' => 'Quick Time h:i',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => '##:##',
                        'help' => 'Type a time quickly',
                    ]
                ),
                new TextField(
                    'license_plate',
                    [
                        'order' => 0,
                        'label' => 'License Plate',
                        'rules' => [
                            new RuleItem('required', TRUE),
                        ],
                        'masking' => 'NNN-NNN',
                        'help' => 'Type numbers and letters',
                    ]
                ),
            ])
            ->setAction(
                new Action(
                    [
                        new Button(
                            'process',
                            'Process Form',
                            'primary',
                            new Icon('mdi-star', 'Process'),
                            0
                        ),
                        new Button(
                            'reset',
                            'Reset Form',
                            'secondary',
                            new Icon('mdi-refresh', 'Reset the form fields'),
                            1
                        ),
                    ],
                    [
                        new Alert(
                            'before_load',
                            [
                                'color' => 'blue',
                                'border' => 'top',
                                'dismissible' => TRUE,
                                'contents' => 'This alert will be ignored because we load by axios',
                            ]
                        ),
                        new Alert(
                            'process_success',
                            [
                                'color' => 'green',
                                'border' => 'top',
                                'dismissible' => TRUE,
                                'contents' => 'Processing successful!',
                            ]
                        ),
                        new Alert(
                            'process_failed',
                            [
                                'color' => 'red',
                                'border' => 'top',
                                'dismissible' => TRUE,
                                'contents' => '<axios-response>',
                            ]
                        ),
                    ],
                    new Axios([
                        'multi_part' => FALSE ,
                        'expecting_results' => TRUE ,
                        'headers' => [] ,
                        'notification' => TRUE,
                    ])
                )
            );
        return $this;
    }

    protected $name = 'ExampleForm3';

    protected $title = 'Load from axios with masking';

    use Transformable;
}
