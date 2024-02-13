<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistentCounter
{
    protected bool $persistent_counter = false;

    public function getPersistentCounter(): bool
    {
        return $this->persistent_counter;
    }

    public function setPersistentCounter(bool $persistent_counter): static
    {
        $this->persistent_counter = $persistent_counter;

        return $this;
    }
}
