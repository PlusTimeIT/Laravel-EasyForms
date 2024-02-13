<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDark
{
    protected bool $dark = false;

    public function getDark(): bool
    {
        return $this->dark;
    }

    public function setDark(bool $dark): static
    {
        $this->dark = $dark;

        return $this;
    }
}
