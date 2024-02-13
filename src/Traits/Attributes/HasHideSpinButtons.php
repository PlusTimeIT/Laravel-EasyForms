<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSpinButtons
{
    protected bool $hide_spin_buttons = false;

    public function getHideSpinButtons(): bool
    {
        return $this->hide_spin_buttons;
    }

    public function setHideSpinButtons(bool $hide_spin_buttons): static
    {
        $this->hide_spin_buttons = $hide_spin_buttons;

        return $this;
    }
}
