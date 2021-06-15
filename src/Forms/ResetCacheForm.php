<?php
namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\ActionForm;
use PlusTimeIT\EasyForms\Controllers\Users;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;
use PlusTimeIT\EasyForms\Elements\{Action, ActionButton, ActionIcon, Alert, Axios, Button, ConditionItem, Header, Icon, MaskItem, RadioItem, RuleItem, SelectItem};
use PlusTimeIT\EasyForms\Fields\{AutoCompleteField, CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, RadioGroupField, SelectField, TextField, TextareaField};
use PlusTimeIT\EasyForms\Traits\Transformable;

class ResetCacheForm extends ActionForm
{
    use Transformable;

    public function __construct()
    {
        parent::__construct();
        return $this
            ->setName('ResetCacheForm')
            ->setTitle('Reset cache form')
            ->setInline(TRUE);
    }

    public function actions(): array
    {
        return [
            ActionButton::make()
                ->setIdentifier('resetCache')
                ->setName('Reset Cached Data')
                ->setButton(
                    Button::make()
                        ->setType('action')
                        ->setColor('primary')
                        ->setText('Reset Data')
                        ->setIcon(
                            Icon::make()->setIcon('mdi-stethoscope')->setTooltip('Reset all the data back to the initial 5 users')->setColor('white')
                        )
                )
                ->setCallback('resetCache')
                ->setOrder(0),
        ];
    }

    public static function process(request $request)
    {
        if ( ! $request->action || ! collect(self::make()->actions())->where('identifier', $request->action)) {
            return ProcessResponse::make()->failed()->data('Don\'t mess with the actions yo!');
        }
        return self::{$request->action}($request);
    }

    public static function resetCache(request $request)
    {
        Users::resetCache();
        return ProcessResponse::make()->success()->data('Cache reset')->redirect('reload');
    }
}
