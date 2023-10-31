<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStrengthSuccessText
{
    protected $strength_success_text = 'success';

    public function getStrengthSuccessText(): string
    {
        return $this->strength_success_text;
    }

    public function setStrengthSuccessText(string $strength_success_text): self
    {
        $this->strength_success_text = $strength_success_text;

        return $this;
    }
}
