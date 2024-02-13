<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAnyField
{
    protected bool $any_field = false;

    public function getAnyField(): bool
    {
        return $this->any_field;
    }

    public function setAnyField(bool $any_field): static
    {
        $this->any_field = $any_field;

        return $this;
    }
}
