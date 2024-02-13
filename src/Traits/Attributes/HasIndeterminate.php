<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasIndeterminate
{
    protected string|bool $indeterminate = false;

    public function getIndeterminate(): string|bool
    {
        return $this->indeterminate;
    }

    public function indeterminate(): string|bool
    {
        return $this->indeterminate;
    }

    public function setIndeterminate(string|bool $indeterminate): static
    {
        $this->indeterminate = $indeterminate;

        return $this;
    }
}
