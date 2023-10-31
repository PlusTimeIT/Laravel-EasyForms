<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSelected
{
    protected $hide_selected = false;

    public function getHideSelected(): bool
    {
        return $this->hide_selected;
    }

    public function setHideSelected(bool $hide_selected): self
    {
        $this->hide_selected = $hide_selected;

        return $this;
    }
}
