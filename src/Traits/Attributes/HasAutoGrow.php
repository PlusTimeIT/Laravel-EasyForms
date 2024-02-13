<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAutoGrow
{
    protected bool $auto_grow = false;

    public function getAutoGrow(): bool
    {
        return $this->auto_grow;
    }

    public function setAutoGrow(bool $auto_grow): static
    {
        $this->auto_grow = $auto_grow;

        return $this;
    }
}
