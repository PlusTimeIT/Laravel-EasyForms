<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnClear
{
    protected bool $open_on_clear;

    public function getOpenOnClear(): bool
    {
        return $this->open_on_clear;
    }

    public function setOpenOnClear(bool $open_on_clear): static
    {
        $this->open_on_clear = $open_on_clear;

        return $this;
    }
}
