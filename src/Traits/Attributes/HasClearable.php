<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasClearable
{
    use HasClearIcon;

    protected bool $clearable = false;

    public function getClearable(): bool
    {
        return $this->clearable;
    }

    public function setClearable(bool $clearable): static
    {
        $this->clearable = $clearable;

        return $this;
    }
}
