<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthErrorText
{
    protected string $strength_error_text = 'error';

    public function getStrengthErrorText(): string
    {
        return $this->strength_error_text;
    }

    public function setStrengthErrorText(string $strength_error_text): static
    {
        $this->strength_error_text = $strength_error_text;

        return $this;
    }
}
