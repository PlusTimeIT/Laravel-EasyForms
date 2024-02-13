<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasReverse
{
    protected bool $reverse = false;

    public function getReverse(): bool
    {
        return $this->reverse;
    }

    public function setReverse(bool $reverse): static
    {
        $this->reverse = $reverse;

        return $this;
    }
}
