<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDensity
{
    protected $density = TRUE;

    public function getDensity(): bool
    {
        return $this->dense;
    }

    public function setDensity(bool $dense): self
    {
        $this->dense = $dense;

        return $this;
    }
}
