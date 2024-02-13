<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasProminent
{
    protected bool $prominent = false;

    public function getProminent(): bool
    {
        return $this->prominent;
    }

    public function setProminent(bool $prominent): static
    {
        $this->prominent = $prominent;

        return $this;
    }
}
