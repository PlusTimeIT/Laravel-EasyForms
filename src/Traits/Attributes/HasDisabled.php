<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDisabled
{
    protected bool $disabled = false;

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): static
    {
        $this->disabled = $disabled;

        return $this;
    }
}
