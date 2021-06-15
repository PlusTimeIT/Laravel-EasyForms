<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMasking
{
    protected $masking;

    public function getMasking(): string | null
    {
        return $this->masking;
    }

    public function setMasking(string | NULL $masking): self
    {
        $this->masking = $masking;
        return $this;
    }
}
