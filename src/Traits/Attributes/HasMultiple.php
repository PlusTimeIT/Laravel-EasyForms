<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMultiple
{
    protected $multiple = false;

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
