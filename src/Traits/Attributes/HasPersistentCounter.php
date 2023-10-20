<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistentCounter
{
    protected $persistent_counter = FALSE;

    public function getPersistentCounter(): bool
    {
        return $this->persistent_counter;
    }

    public function setPersistentCounter(bool $persistent_counter): self
    {
        $this->persistent_counter = $persistent_counter;

        return $this;
    }
}
