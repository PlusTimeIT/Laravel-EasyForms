<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasButtonJustifyRow
{
    protected string $button_justify_row = 'center';

    public function buttonJustifyRow(): string
    {
        return $this->button_justify_row;
    }

    public function getButtonJustifyRow(): string
    {
        return $this->button_justify_row;
    }

    public function setButtonJustifyRow(string $button_justify_row): static
    {
        $this->button_justify_row = $button_justify_row;

        return $this;
    }
}
