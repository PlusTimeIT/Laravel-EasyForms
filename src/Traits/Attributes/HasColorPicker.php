<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Fields\ColorPicker;

trait HasColorPicker
{
    protected ColorPicker $picker;

    public function getPicker(): ColorPicker
    {
        return $this->picker;
    }

    public function picker(): ColorPicker
    {
        return $this->picker;
    }

    public function setPicker(ColorPicker $picker): static
    {
        $this->picker = $picker;

        return $this;
    }
}
