<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Fields\SwitchField;

trait HasSwitch
{
    protected SwitchField $switch;

    public function getSwitch(): SwitchField
    {
        return $this->switch;
    }

    public function setSwitch(SwitchField $switch): static
    {
        $this->switch = $switch;

        return $this;
    }
}
