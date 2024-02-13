<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxErrors
{
    protected int|string $max_errors = 1;

    public function getMaxErrors(): int|string
    {
        return $this->max_errors;
    }

    public function setMaxErrors(int|string $max_errors): static
    {
        $this->max_errors = $max_errors;

        return $this;
    }
}
