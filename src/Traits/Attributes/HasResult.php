<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasResult
{
    protected bool $result;

    public function failed(): self
    {
        return $this->setResult(false);
    }

    public function getResult(): bool
    {
        return $this->result;
    }

    public function result(): bool
    {
        return $this->result;
    }

    public function setResult(bool $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function success(): self
    {
        return $this->setResult(true);
    }

    public function wasSuccessful(): bool
    {
        return $this->getResult();
    }
}
