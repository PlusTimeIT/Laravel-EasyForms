<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasResult
{
    protected $result;

    public function failed()
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

    public function success()
    {
        return $this->setResult(true);
    }

    public function wasSuccessful()
    {
        return $this->getResult();
    }
}
