<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasInset
{
    protected bool $inset = false;

    public function getInset(): bool
    {
        return $this->inset;
    }

    public function setInset(bool $inset): static
    {
        $this->inset = $inset;

        return $this;
    }
}
