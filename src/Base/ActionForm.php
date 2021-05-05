<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\ActionFormInterface;
use PlusTimeIT\EasyForms\Traits\ActionFormTrait;

abstract class ActionForm extends EasyForm implements ActionFormInterface
{
    use ActionFormTrait;

    public function __construct()
    {
        parent::__construct();
        $this
            ->setActions($this->actions());
    }
}
