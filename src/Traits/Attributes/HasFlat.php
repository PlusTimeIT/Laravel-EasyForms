<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFlat
{
    protected $flat = FALSE;

    public function getFlat(): bool
    {
        return $this->flat;
    }

    public function setFlat(bool $flat): self
    {
        $this->flat = $flat;
        return $this;
    }
}