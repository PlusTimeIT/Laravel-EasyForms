<?php
namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;
use PlusTimeIT\EasyForms\Elements\{Action, Alert, Axios, Button, Header, Icon, RadioItem, RuleItem, SelectItem};
use PlusTimeIT\EasyForms\Fields\{AutoCompleteField, CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, RadioGroupField, SelectField, TextField, TextareaField};
use PlusTimeIT\EasyForms\Traits\Transformable;

final class ExampleForm3 extends InputForm
{
    use Transformable;

    public function __construct()
    {
        parent::__construct();
        return $this
            ->setName('ExampleForm3')
            ->setTitle('Load from axios with masking');
    }

    public function alerts(): array
    {
        return [
            Alert::make()
                ->setTrigger('before_load')
                ->setType('error')
                ->setColor('red')
                ->setProminent(TRUE)
                ->setBorder('bottom')
                ->setDismissible(TRUE)
                ->setContents('This alert will be ignored because we load by axios!')
            ,
            Alert::make()
                ->setTrigger('failed_processing')
                ->setType('error')
                ->setColor('red')
                ->setProminent(TRUE)
                ->setBorder('bottom')
                ->setDismissible(TRUE)
                ->setContents('Processing Failed!')
            ,
            Alert::make()
                ->setTrigger('successful_processing')
                ->setType('success')
                ->setColor('green')
                ->setProminent(TRUE)
                ->setBorder('top')
                ->setDismissible(TRUE)
                ->setContents('Processing Successful!')
            ,
        ];
    }

    public function axios(): Axios
    {
        return Axios::make();
    }

    public function buttons(): array
    {
        return [
            Button::make()
                ->setType('process')
                ->setColor('primary')
                ->setText('Process Form')
                ->setIcon(
                    Icon::make()->setIcon('mdi-star')->setTooltip('Process')
                )
                ->setOrder(0)
            ,
        ];
    }

    public function fields(): array
    {
        return [
            TextField::make()
                ->setName('mobile1')
                ->setOrder(0)
                ->setLabel('Mobile Number 1')
                ->setMasking('04##-###-###')
                ->setHelp('Number format 1')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            TextField::make()
                ->setName('mobile2')
                ->setOrder(0)
                ->setLabel('Mobile Number 2')
                ->setMasking('+61 4########')
                ->setHelp('Number format 2')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            TextField::make()
                ->setName('mobile3')
                ->setOrder(0)
                ->setLabel('Mobile Number 3')
                ->setMasking('(+61) 4########')
                ->setHelp('Number format 3')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            TextField::make()
                ->setName('quick_date')
                ->setOrder(0)
                ->setLabel('Quick Date d/m/Y')
                ->setMasking('##/##/####')
                ->setHelp('Type a date quickly')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            TextField::make()
                ->setName('quick_time')
                ->setOrder(0)
                ->setLabel('Quick Time h:i')
                ->setMasking('##:##')
                ->setHelp('Type a time quickly')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ])
            ,
            TextField::make()
                ->setName('license_plate')
                ->setOrder(0)
                ->setLabel('License Plate')
                ->setMasking('NNN-NNN')
                ->setHelp('Type numbers and letters')
                ->setRules([
                    RuleItem::make()->setName('required')->setValue(TRUE),
                ]),
        ];
    }

    public static function fill(request $request): self
    {
        return self::make();
    }

    public static function process(request $request)
    {
        return ProcessResponse::make()->success()->data('We processed yo!');
    }
}
