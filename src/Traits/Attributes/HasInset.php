<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasInset
{
    protected $inset = FALSE;

    public function getInset(): bool
    {
        return $this->inset;
    }

    public function setInset(bool $inset): self
    {
        $this->inset = $inset;

        return $this;
    }
}
