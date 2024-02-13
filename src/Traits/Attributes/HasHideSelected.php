<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSelected
{
    protected bool $hide_selected = false;

    public function getHideSelected(): bool
    {
        return $this->hide_selected;
    }

    public function setHideSelected(bool $hide_selected): static
    {
        $this->hide_selected = $hide_selected;

        return $this;
    }
}
