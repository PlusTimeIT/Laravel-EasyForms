<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthSuccessText
{
    protected string $strength_success_text = 'success';

    public function getStrengthSuccessText(): string
    {
        return $this->strength_success_text;
    }

    public function setStrengthSuccessText(string $strength_success_text): static
    {
        $this->strength_success_text = $strength_success_text;

        return $this;
    }
}
