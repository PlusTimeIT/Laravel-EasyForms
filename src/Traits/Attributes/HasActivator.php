<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActivator
{
    protected $activator = false;

    public function getActivator(): string
    {
        return $this->activator;
    }

    public function setActivator(string $activator): self
    {
        $this->activator = $activator;

        return $this;
    }
}
