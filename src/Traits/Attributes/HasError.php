<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasError
{
    protected $error = FALSE;

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
