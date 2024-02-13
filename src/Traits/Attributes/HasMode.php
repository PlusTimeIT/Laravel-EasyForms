<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\ColorPickerModes;

trait HasMode
{
    protected ColorPickerModes $mode = ColorPickerModes::Hex;

    public function getMode(): ColorPickerModes
    {
        return $this->mode;
    }

    public function mode(): ColorPickerModes
    {
        return $this->mode;
    }

    public function setMode(ColorPickerModes $mode): static
    {
        $this->mode = $mode;

        return $this;
    }
}
