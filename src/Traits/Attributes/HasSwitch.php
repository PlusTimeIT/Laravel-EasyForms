<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Fields\SwitchField;

trait HasSwitch
{
    protected $switch = SwitchField::class;

    public function getSwitch(): SwitchField
    {
        return $this->switch;
    }

    public function setSwitch(SwitchField $switch): self
    {
        $this->switch = $switch;

        return $this;
    }
}
