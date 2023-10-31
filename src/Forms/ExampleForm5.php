<?php

namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Controllers\Users;
use PlusTimeIT\EasyForms\Elements\Alert;
use PlusTimeIT\EasyForms\Elements\Button;
use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;
use PlusTimeIT\EasyForms\Elements\RuleItem;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Enums\AlertTriggers;
use PlusTimeIT\EasyForms\Enums\AlertTypes;
use PlusTimeIT\EasyForms\Fields\ColorPickerField;
use PlusTimeIT\EasyForms\Fields\HiddenField;
use PlusTimeIT\EasyForms\Fields\SelectField;
use PlusTimeIT\EasyForms\Fields\TextField;
use PlusTimeIT\EasyForms\Traits\Transformable;

final class ExampleForm5 extends InputForm
{
    use Transformable;

    public function __construct()
    {
        parent::__construct();

        return $this
            ->setName('ExampleForm5')
            ->setTitle('Edit User details with fill');
    }

    public function alerts(): array
    {
        return [
            Alert::make()
                ->setTrigger(AlertTriggers::SuccessProcessing)
                ->setType(AlertTypes::Success)
                ->setColor('green')
                ->setProminent(true)
                ->setBorder('top')
                ->setClosable(true)
                ->setText('Successfully saved user'),
            Alert::make()
                ->setTrigger(AlertTriggers::FailedProcessing)
                ->setType(AlertTypes::Error)
                ->setColor('green')
                ->setProminent(true)
                ->setBorder('top')
                ->setClosable(true)
                ->setText('<response-data>'),
        ];
    }

    public function buttons(): array
    {
        return [
            Button::make()
                ->setType('process')
                ->setColor('primary')
                ->setText('Save User')
                ->setIcon(
                    Icon::make()->setIcon('mdi-content-save')->setTooltip('Save')
                )
                ->setOrder(0),
        ];
    }

    public function fields(): array
    {
        return [
            HiddenField::make()
                ->setName('id')
                ->setOrder(0)
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),

            TextField::make()
                ->setName('name')
                ->setOrder(0)
                ->setClearable(true)
                ->setHelp('The users name')
                ->setLabel('Name')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
            ColorPickerField::make()
                ->setName('colour')
                ->setOrder(0)
                ->setHelp('The users colour in hex')
                ->setLabel('Colour')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
            TextField::make()
                ->setName('username')
                ->setOrder(0)
                ->setClearable(true)
                ->setHelp('The users username')
                ->setLabel('Username')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
            TextField::make()
                ->setName('email')
                ->setOrder(1)
                ->setHelp('The users email address')
                ->setLabel('Email')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
            SelectField::make()
                ->setName('status')
                ->setOrder(2)
                ->setHelp('The users status')
                ->setLabel('Status')
                ->setItems([
                    SelectItem::make()->setId('active')->setValue('Active'),
                    SelectItem::make()->setId('inactive')->setValue('Inactive'),
                    SelectItem::make()->setId('banned')->setValue('Banned'),
                ])
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(true),
                ]),
        ];
    }

    public static function fill(request $request): self
    {
        $form = self::make();

        return $form->setFields(
            $form->populateFields(Users::find($request->data))
        );
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

    public static function process(request $request): ProcessResponse
    {
        //request has been validated so we know what we have.
        $username = $request->username;
        $password = $request->password;

        //check if user exists if it does send redirect
        $user = Users::find($request->id);
        if (! $user) {
            return ProcessResponse::make()
                ->failed()
                ->data('User not found with id:'.$request->id);
        }

        Users::updateUser($request->id, [
            'username' => $request->username,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        $user = Users::find($request->id);

        return ProcessResponse::make()
            ->success()
            ->data($user);
    }
}
