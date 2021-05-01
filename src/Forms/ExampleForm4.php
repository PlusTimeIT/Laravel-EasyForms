<?php
namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\ActionForm;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;
use PlusTimeIT\EasyForms\Elements\{Action, ActionIcon, Alert, Axios, Button, Header, Icon, MaskItem, RadioItem, RuleItem, SelectItem};
use PlusTimeIT\EasyForms\Fields\{AutoCompleteField, CheckboxField, FileInputField, HiddenField, NumberField, PasswordField, RadioGroupField, SelectField, TextField, TextareaField};
use PlusTimeIT\EasyForms\Traits\Transformable;

class ExampleForm4 extends ActionForm
{
    public function __construct()
    {
        parent::__construct();
        return $this
            ->setName('ExampleForm4')
            ->setTitle('Action Form')
            ->setInline(TRUE);
    }

    public function actions(): array
    {
        return [
            ActionIcon::make()
                ->setIdentifier('editUser')
                ->setName('Edit User Details')
                ->setIcon(
                    Icon::make()->setIcon('mdi-pencil', 'Edit Action')
                )
                ->setCallback('editUser')
                ->setOrder(0)
            ,
            ActionIcon::make()
                ->setIdentifier('editUser')
                ->setName('Delete User')
                ->setIcon(
                    Icon::make()->setIcon('mdi-delete-circle', 'Delete Action')
                )
                ->setCallback('deleteUser')
                ->setOrder(1),
        ];
    }

    public function alerts(): array
    {
        return [
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
                ->setContents('Processing Successful!'),
        ];
    }

    public static function deleteUser(request $request)
    {
        //validate request
        if ($request->id !== 1) {
            return ProcessResponse::make()->failed()->data('oops wrong user id - user not found!');
        }
        return ProcessResponse::make()->success()->data('Yay you found him and changed him');
    }

    public static function editUser(request $request)
    {
        //validated request alright
        if ($request->id !== 1) {
            return ProcessResponse::make()->success()->data('oops wrong user id - user not found!');
        }
        return ProcessResponse::make()->success()->data('Yay you found him and deleted him');
    }

    use Transformable;
}
