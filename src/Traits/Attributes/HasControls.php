<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasControls
{
    protected bool $controls = false;

    public function getControls(): bool
    {
        return $this->controls;
    }

    public function setControls(bool $controls): static
    {
        $this->controls = $controls;

        return $this;
    }
}
