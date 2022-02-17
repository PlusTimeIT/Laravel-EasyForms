<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideInputs
{
    protected $hide_inputs = FALSE;

    public function getHideInputs(): bool
    {
        return $this->hide_inputs;
    }

    public function setHideInputs(bool $hide_inputs): self
    {
        $this->hide_inputs = $hide_inputs;
        return $this;
    }
}
