<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSpinButtons
{
    protected $hide_spin_buttons = FALSE;

    public function getHideSpinButtons(): bool
    {
        return $this->hide_spin_buttons;
    }

    public function setHideSpinButtons(bool $hide_spin_buttons): self
    {
        $this->hide_spin_buttons = $hide_spin_buttons;

        return $this;
    }
}
