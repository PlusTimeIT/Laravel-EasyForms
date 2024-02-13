<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthErrorColor
{
    protected string $strength_error_color = 'error';

    public function getStrengthErrorColor(): string
    {
        return $this->strength_error_color;
    }

    public function setStrengthErrorColor(string $strength_error_color): static
    {
        $this->strength_error_color = $strength_error_color;

        return $this;
    }
}
