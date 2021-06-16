<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRounded
{
    protected $rounded = FALSE;

    public function getRounded(): bool
    {
        return $this->rounded;
    }

    public function setRounded(bool $rounded): self
    {
        $this->rounded = $rounded;
        return $this;
    }
}
