<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideModeSwitch
{
    protected bool $hide_mode_switch = false;

    public function getHideModeSwitch(): bool
    {
        return $this->hide_mode_switch;
    }

    public function setHideModeSwitch(bool $hide_mode_switch): static
    {
        $this->hide_mode_switch = $hide_mode_switch;

        return $this;
    }
}
