<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideInputs
{
    protected bool $hide_inputs = false;

    public function getHideInputs(): bool
    {
        return $this->hide_inputs;
    }

    public function setHideInputs(bool $hide_inputs): static
    {
        $this->hide_inputs = $hide_inputs;

        return $this;
    }
}
