<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActivator
{
    protected bool $activator = false;

    public function activator(): bool
    {
        return $this->activator;
    }

    public function getActivator(): bool
    {
        return $this->activator;
    }

    public function setActivator(bool $activator): static
    {
        $this->activator = $activator;

        return $this;
    }
}
