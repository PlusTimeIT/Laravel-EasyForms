<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\ActionFormInterface;
use PlusTimeIT\EasyForms\Traits\ActionFormTrait;

abstract class ActionForm extends EasyForm implements ActionFormInterface
{
    public function __construct()
    {
        $this
            ->setAlerts($this->alerts())
            ->setActions($this->actions());
    }

    protected $alerts = [];

    protected $actions;

    use ActionFormTrait;
}
