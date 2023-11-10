<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMultiple
{
    protected bool $multiple = false;

    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }
}
