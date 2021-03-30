<?php
namespace PlusTimeIT\EasyForms\Forms;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Base\InputForm;
use PlusTimeIT\EasyForms\Elements\{Action, Alert, Axios, Button, Header, Icon, RuleItem};
use PlusTimeIT\EasyForms\Fields\{PasswordField, TextField};
use PlusTimeIT\EasyForms\Traits\Transformable;

class ExampleForm1 extends InputForm
{
    public function __construct()
    {
        parent::__construct();
        return $this
            ->setName('ExampleForm1')
            ->setTitle('Load from page');
    }

    public function alerts(): array
    {
        return [
            Alert::make()
                ->setTrigger('before_load')
                ->setColor('secondary')
                ->setBorder('top')
                ->setDismissible(FALSE)
                ->setText(TRUE)
                ->setContents('<p>This is a sticky alert</p> <p><a target="_blank" href="/easyforms/example/2">Check out Example 2 😁</a></p>')
                ->setIcon(
                    Icon::make()->setIcon('mdi-note-multiple')
                )
            ,
            Alert::make()
                ->setTrigger('after_load')
                ->setColor('blue')
                ->setBorder('right')
                ->setDismissible(FALSE)
                ->setText(TRUE)
                ->setProminent(TRUE)
                ->setAutoCloseTimer(1000)
                ->setTransition('fade-transition')
                ->setContents('Form is loading now...')
                ->setIcon(
                    Icon::make()->setIcon('mdi-rocket')
                )
            ,
            Alert::make()
                ->setTrigger('before_processing')
                ->setColor('green')
                ->setBorder('left')
                ->setText(TRUE)
                ->setDismissible(TRUE)
                ->setContents('Processing starting!')
            ,
            Alert::make()
                ->setTrigger('after_processing')
                ->setColor('green')
                ->setBorder('top')
                ->setDismissible(TRUE)
                ->setContents('Processing Finished!')
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
            Alert::make()
                ->setTrigger('reset_form')
                ->setColor('grey')
                ->setBorder('top')
                ->setDismissible(TRUE)
                ->setContents('Form Reset')
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
                ->setOrder(1)
            ,
            Button::make()
                ->setType('cancel')
                ->setColor('secondary')
                ->setText('Cancel')
                ->setIcon(
                    Icon::make()->setIcon('mdi-cancel')->setTooltip('Cancel the form')
                )
                ->setOrder(2),
        ];
    }

    public function fields(): array
    {
        return [
            TextField::make()
                ->setName('username')
                ->setOrder(0)
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
        $fields = self::fields();
        //check if request->id exists or whatever variable
        //you are sending via additional form data
        $fakeData = [
            'username' => 'HelloWorld' ,
            'password' => 'HelloWorld' ,
        ];
    }

    public static function process(request $request)
    {
        $form = self::make();
    }

    use Transformable;
}
