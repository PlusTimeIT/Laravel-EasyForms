<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAbsolute
{
    protected bool $absolute = false;

    public function getAbsolute(): bool
    {
        return $this->absolute;
    }

    public function setAbsolute(bool $absolute): static
    {
        $this->absolute = $absolute;

        return $this;
    }
}
