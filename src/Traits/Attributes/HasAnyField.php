<?php

namespace PlusTimeIT\Traits\Attributes;

trait HasAnyField
{
    protected $any_field = false;

    public function getAnyField(): bool
    {
        return $this->any_field;
    }

    public function setAnyField(bool $any_field): self
    {
        $this->any_field = $any_field;

        return $this;
    }
}
