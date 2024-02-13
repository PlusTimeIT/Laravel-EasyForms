<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMandatory
{
    protected bool $mandatory = true;

    public function getMandatory(): bool
    {
        return $this->mandatory;
    }

    public function setMandatory(bool $mandatory): static
    {
        $this->mandatory = $mandatory;

        return $this;
    }
}
