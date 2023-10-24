<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuccess
{
    protected $success = false;

    public function getSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;

        return $this;
    }
}
