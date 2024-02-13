<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLowerCase
{
    protected bool $lower_case = false;

    public function getLowerCase(): bool
    {
        return $this->lower_case;
    }

    public function setLowerCase(bool $lower_case): static
    {
        $this->lower_case = $lower_case;

        return $this;
    }
}
