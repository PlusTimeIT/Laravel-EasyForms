<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasUpperCase
{
    protected bool $upper_case = false;

    public function getUpperCase(): bool
    {
        return $this->upper_case;
    }

    public function setUpperCase(bool $upper_case): static
    {
        $this->upper_case = $upper_case;

        return $this;
    }
}
