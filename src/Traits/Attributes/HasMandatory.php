<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMandatory
{
    protected $mandatory = true;

    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    public function setMandatory(bool $mandatory): self
    {
        $this->mandatory = $mandatory;

        return $this;
    }
}
