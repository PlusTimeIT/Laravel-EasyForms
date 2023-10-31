<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasReverse
{
    protected $reverse = false;

    public function getReverse(): bool
    {
        return $this->reverse;
    }

    public function setReverse(bool $reverse): self
    {
        $this->reverse = $reverse;

        return $this;
    }
}
