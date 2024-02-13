<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideSliders
{
    protected bool $hide_sliders = false;

    public function getHideSliders(): bool
    {
        return $this->hide_sliders;
    }

    public function setHideSliders(bool $hide_sliders): static
    {
        $this->hide_sliders = $hide_sliders;

        return $this;
    }
}
