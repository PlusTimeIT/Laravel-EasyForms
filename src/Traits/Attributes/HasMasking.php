<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMasking
{
    protected $masking;

    public function getMasking(): ?string
    {
        return $this->masking;
    }

    public function setMasking(?string $masking): self
    {
        $this->masking = $masking;

        return $this;
    }
}
