<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCounter
{
    protected bool $counter = false;

    public function getCounter(): bool
    {
        return $this->counter;
    }

    public function setCounter(string $counter): static
    {
        $this->counter = $counter;

        return $this;
    }
}
