<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthWarningText
{
    protected string $strength_warning_text = 'warning';

    public function getStrengthWarningText(): string
    {
        return $this->strength_warning_text;
    }

    public function setStrengthWarningText(string $strength_warning_text): static
    {
        $this->strength_warning_text = $strength_warning_text;

        return $this;
    }
}
