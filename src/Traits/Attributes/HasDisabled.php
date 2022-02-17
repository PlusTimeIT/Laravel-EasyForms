<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDisabled
{
    protected $disabled = FALSE;

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;
        return $this;
    }
}
