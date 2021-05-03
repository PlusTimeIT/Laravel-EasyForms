<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\ActionFormInterface;
use PlusTimeIT\EasyForms\Traits\ActionFormTrait;

abstract class ActionForm extends EasyForm implements ActionFormInterface
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->setActions($this->actions());
    }


    protected $actions;

    protected $form_type = 'action';

    use ActionFormTrait;
}
