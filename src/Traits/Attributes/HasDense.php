<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDense
{
    protected $dense = TRUE;

    public function getDense(): bool
    {
        return $this->dense;
    }

    public function setDense(bool $dense): self
    {
        $this->dense = $dense;

        return $this;
    }
}
