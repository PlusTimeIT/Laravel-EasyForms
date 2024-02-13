<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthWarningColor
{
    protected string $strength_warning_color = 'warning';

    public function getStrengthWarningColor(): string
    {
        return $this->strength_warning_color;
    }

    public function setStrengthWarningColor(string $strength_warning_color): static
    {
        $this->strength_warning_color = $strength_warning_color;

        return $this;
    }
}
