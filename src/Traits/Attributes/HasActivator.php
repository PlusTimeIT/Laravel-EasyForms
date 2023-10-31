<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActivator
{
    protected $activator = false;

    public function getActivator(): bool
    {
        return $this->activator;
    }

    public function setActivator(bool $activator): self
    {
        $this->activator = $activator;

        return $this;
    }
}
