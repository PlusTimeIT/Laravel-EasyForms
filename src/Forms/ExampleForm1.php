<?php

namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Alert, Axios, Button, Header, Icon, ProcessResponse, RuleItem};
use PlusTimeIT\EasyForms\Enums\{AlertTriggers, AlertTypes};
use PlusTimeIT\EasyForms\Fields\{PasswordField, TextField};
use PlusTimeIT\EasyForms\Traits\Transformable;

final class ExampleForm1 extends InputForm
{
    use Transformable;

    public function __construct()
    {
        parent::__construct();
        return $this
            ->setName('ExampleForm1')
            ->setTitle('Load from page with alerts');
    }

    public function alerts(): array
    {
        return [
            Alert::make()
                ->setTrigger(AlertTriggers::BeforeLoad)
                ->setColor('secondary')
                ->setBorder('top')
                ->setClosable(FALSE)
                ->setTextStyle(TRUE)
                ->setText('<p>This is a sticky alert</p> <p><a target="_blank" href="/easyforms/example/2">Check out Example 2 😁</a></p>')
                ->setIcon(
                    Icon::make()->setIcon('mdi-note-multiple')
                )
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::AfterLoad)
                ->setColor('blue')
                ->setBorder('right')
                ->setClosable(FALSE)
                ->setTextStyle(TRUE)
                ->setProminent(TRUE)
                ->setAutoCloseTimer(1000)
                ->setTransition('fade-transition')
                ->setText('Form is loading now...')
                ->setIcon(
                    Icon::make()->setIcon('mdi-rocket')
                )
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::BeforeProcessing)
                ->setColor('green')
                ->setBorder('left')
                ->setTextStyle(TRUE)
                ->setClosable(TRUE)
                ->setText('Processing starting!')
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::AfterProcessing)
                ->setColor('green')
                ->setBorder('top')
                ->setClosable(TRUE)
                ->setText('Processing Finished!')
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::FailedProcessing)
                ->setType(AlertTypes::Error)
                ->setColor('red')
                ->setProminent(TRUE)
                ->setBorder('bottom')
                ->setClosable(TRUE)
                ->setText('Concat the response: <response-data>')
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::SuccessProcessing)
                ->setType(AlertTypes::Success)
                ->setColor('green')
                ->setProminent(TRUE)
                ->setBorder('top')
                ->setClosable(TRUE)
                ->setText('Concat the response: <response-data>')
            ,
            Alert::make()
                ->setTrigger(AlertTriggers::FormReset)
                ->setColor('grey')
                ->setBorder('top')
                ->setClosable(TRUE)
                ->setText('Form Reset')
            ,
        ];
    }

    public function buttons(): array
    {
        return [
            Button::make()
                ->setType('process')
                ->setColor('primary')
                ->setText('Login')
                ->setIcon(
                    Icon::make()->setIcon('mdi-login')->setTooltip('Login to the app')
                )
                ->setOrder(0)
            ,
            Button::make()
                ->setType('reset')
                ->setColor('secondary')
                ->setText('Reset Form')
                ->setIcon(
                    Icon::make()->setIcon('mdi-refresh')->setTooltip('Reset the form fields')
                )
                ->setOrder(1),
        ];
    }

    public function fields(): array
    {
        return [
            TextField::make()
                ->setName('username')
                ->setOrder(0)
                ->setClearable(TRUE)
                ->setHelp('OH OH')
                ->setLabel('Username')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            PasswordField::make()
                ->setName('password')
                ->setOrder(1)
                ->setLabel('Password')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ]),
        ];
    }

    public static function fill(request $request): self
    {
        // we can just set this to preFill if we want to load by axios later
        return ( new self() )->preFill();
    }

    public function populateFields($data): array
    {
        return collect($this->fields())->map(function($field) use ($data) {
            if (isset($data[ $field->getName()])) {
                $field->setValue($data[ $field->getName()]);
            }

            return $field;
        })->toArray();
    }

    public function preFill(): self
    {
        //this form is always loaded by page not axios so we want to prefill it
        $fakeData = [
            'username' => 'Pre-populated Username' ,
        ];
        return $this->setFields($this->populateFields($fakeData));
    }

    public static function process(request $request)
    {
        //request has been validated so we know what we have.
        $username = $request->username;
        $password = $request->password;

        //run checks
        if ($username !== 'Pre-populated Username') {
            return ProcessResponse::make()->failed()->data('Wrong username silly, use the preloaded one');
        }

        return ProcessResponse::make()->success()->data('Yay you logged in!');
    }
}
