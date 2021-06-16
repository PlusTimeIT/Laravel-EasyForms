<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDark
{
    protected $dark = FALSE;

    public function getDark(): bool
    {
        return $this->dark;
    }

    public function setDark(bool $dark): self
    {
        $this->dark = $dark;
        return $this;
    }
}
