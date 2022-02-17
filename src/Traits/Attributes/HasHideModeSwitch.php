<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideModeSwitch
{
    protected $hide_mode_switch = FALSE;

    public function getHideModeSwitch(): bool
    {
        return $this->hide_mode_switch;
    }

    public function setHideModeSwitch(bool $hide_mode_switch): self
    {
        $this->hide_mode_switch = $hide_mode_switch;
        return $this;
    }
}
