<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistentClear
{
    protected bool $persistent_clear = false;

    public function getPersistentClear(): bool
    {
        return $this->persistent_clear;
    }

    public function setPersistentClear(bool $persistent_clear): static
    {
        $this->persistent_clear = $persistent_clear;

        return $this;
    }
}
