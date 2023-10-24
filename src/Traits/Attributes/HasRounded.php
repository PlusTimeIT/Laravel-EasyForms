<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRounded
{
    protected $rounded = FALSE;

    public function getRounded(): bool | string | int
    {
        return $this->rounded;
    }

    public function setRounded(bool | string | int $rounded): self
    {
        $this->rounded = $rounded;
        return $this;
    }
}
