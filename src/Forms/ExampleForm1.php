<?php

namespace App\Http\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\Alert;
use PlusTimeIT\EasyForms\Elements\Axios;
use PlusTimeIT\EasyForms\Elements\Button;
use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;
use PlusTimeIT\EasyForms\Elements\RuleItem;
use PlusTimeIT\EasyForms\Elements\Tooltip;
use PlusTimeIT\EasyForms\Enums\AlertTriggers;
use PlusTimeIT\EasyForms\Enums\AlertTypes;
use PlusTimeIT\EasyForms\Fields\PasswordField;
use PlusTimeIT\EasyForms\Fields\TextField;
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
                ->setType(AlertTypes::Info)
                ->setTrigger(AlertTriggers::BeforeLoad)
                ->setColor('secondary')
                ->setBorder('top')
                ->setClosable(false)
                ->setTextStyle(true)
                ->setText('<p>This is a sticky alert</p> <p><a target="_blank" href="/easyforms/example/2">Check out Example 2 😁</a></p>')
                ->setIcon(
                    Icon::make()->setIcon('mdi-note-multiple')
                ),
            Alert::make()
                ->setType(AlertTypes::Warning)
                ->setTrigger(AlertTriggers::AfterLoad)
                ->setColor('blue')
                ->setBorder('right')
                ->setClosable(false)
                ->setTextStyle(true)
                ->setProminent(true)
                ->setAutoCloseTimer(1000)
                ->setTransition('fade-transition')
                ->setText('Form has finished loading - After Load')
                ->setIcon(
                    Icon::make()->setIcon('mdi-rocket')
                ),
            Alert::make()
                ->setType(AlertTypes::Success)
                ->setTrigger(AlertTriggers::BeforeProcessing)
                ->setColor('green')
                ->setBorder('left')
                ->setTextStyle(true)
                ->setClosable(true)
                ->setText('Form is about to process - Before Processing'),
            Alert::make()
                ->setType(AlertTypes::Success)
                ->setTrigger(AlertTriggers::AfterProcessing)
                ->setColor('green')
                ->setBorder('top')
                ->setClosable(true)
                ->setText('Form has processed - After Processing'),
            Alert::make()
                ->setType(AlertTypes::Error)
                ->setTrigger(AlertTriggers::FailedProcessing)
                ->setColor('red')
                ->setProminent(true)
                ->setBorder('bottom')
                ->setClosable(true)
                ->setText('Form failed processing - Failed Processing - Response: <response-data>'),
            Alert::make()
                ->setType(AlertTypes::Success)
                ->setTrigger(AlertTriggers::SuccessProcessing)
                ->setColor('green')
                ->setProminent(true)
                ->setBorder('top')
                ->setClosable(true)
                ->setText('Form successfully processed - Success Processing - Response: <response-data>'),
            Alert::make()
                ->setType(AlertTypes::Info)
                ->setTrigger(AlertTriggers::FormReset)
                ->setColor('grey')
                ->setBorder('top')
                ->setClosable(true)
                ->setText('Form has reset - Form Reset'),
        ];
    }

    public function buttons(): array
    {
        return [
            Button::make()
                ->setType('process')
                ->setColor('primary')
                ->setText('Login')
                ->setPrependIcon(
                    Icon::make()
                        ->setIcon('mdi-login')
                        ->setTooltip(
                            Tooltip::make()->setText('Process Form')
                        )
                )
                ->setOrder(0),
            Button::make()
                ->setType('reset')
                ->setColor('secondary')
                ->setText('Reset Form')
                ->setOrder(1),
        ];
    }

    public function fields(): array
    {
        return [
            TextField::make()
                ->setName('username')
                ->setOrder(0)
                ->setClearable(true)
                ->setHelp('OH OH')
                ->setLabel('Username')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
            PasswordField::make()
                ->setName('password')
                ->setOrder(1)
                ->setLabel('Password')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
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
        return collect($this->fields())->map(function ($field) use ($data) {
            if (isset($data[$field->getName()])) {
                $field->setValue($data[$field->getName()]);
            }

            return $field;
        })->toArray();
    }

    public function preFill(): self
    {
        //this form is always loaded by page not axios so we want to prefill it
        $fakeData = [
            'username' => 'Pre-populated Username',
        ];

        return $this->setFields($this->populateFields($fakeData));
    }

    public static function process(request $request): ProcessResponse
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
