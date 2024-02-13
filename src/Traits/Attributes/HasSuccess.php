<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuccess
{
    protected bool $success = false;

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): static
    {
        $this->success = $success;

        return $this;
    }
}
