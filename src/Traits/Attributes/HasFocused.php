<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFocused
{
    protected bool $focused = false;

    public function getFocused(): bool
    {
        return $this->focused;
    }

    public function setFocused(bool $focused): static
    {
        $this->focused = $focused;

        return $this;
    }
}
