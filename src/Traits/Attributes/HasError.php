<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasError
{
    protected bool $error = false;

    public function getError(): bool
    {
        return $this->error;
    }

    public function setError(bool $error): self
    {
        $this->error = $error;

        return $this;
    }
}
