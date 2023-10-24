<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFocused
{
    protected $focused = false;

    public function getFocused(): bool
    {
        return $this->focused;
    }

    public function setFocused(bool $focused): self
    {
        $this->focused = $focused;

        return $this;
    }
}
