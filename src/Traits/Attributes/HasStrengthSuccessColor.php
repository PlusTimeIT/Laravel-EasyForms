<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthSuccessColor
{
    protected string $strength_success_color = 'success';

    public function getStrengthSuccessColor(): string
    {
        return $this->strength_success_color;
    }

    public function setStrengthSuccessColor(string $strength_success_color): static
    {
        $this->strength_success_color = $strength_success_color;

        return $this;
    }
}
