<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasValidateOnBlur
{
    protected bool $validate_on_blur = false;

    public function getValidateOnBlur(): bool
    {
        return $this->validate_on_blur;
    }

    public function setValidateOnBlur(bool $validate_on_blur): static
    {
        $this->validate_on_blur = $validate_on_blur;

        return $this;
    }
}
