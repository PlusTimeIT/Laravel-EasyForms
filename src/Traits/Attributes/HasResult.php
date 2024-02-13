<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasResult
{
    protected bool $result;

    public function failed(): static
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

    public function setResult(bool $result): static
    {
        $this->result = $result;

        return $this;
    }

    public function success(): static
    {
        return $this->setResult(true);
    }

    public function wasSuccessful(): bool
    {
        return $this->getResult();
    }
}
