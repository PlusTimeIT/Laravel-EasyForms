<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMasking
{
    protected ?string $masking;

    public function getMasking(): ?string
    {
        return $this->masking;
    }

    public function setMasking(?string $masking): static
    {
        $this->masking = $masking;

        return $this;
    }
}
