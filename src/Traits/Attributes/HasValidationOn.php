<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\ValidationTriggers;

trait HasValidationOn
{
    protected ValidationTriggers $validate_on;

    public function getValidateOn(): ValidationTriggers
    {
        return $this->validate_on;
    }

    public function setValidateOn(ValidationTriggers $validate_on): self
    {
        $this->validate_on = $validate_on;

        return $this;
    }
}
