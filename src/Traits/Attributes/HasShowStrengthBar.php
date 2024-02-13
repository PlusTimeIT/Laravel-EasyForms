<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowStrengthBar
{
    protected bool $show_strength_bar = false;

    public function getShowStrengthBar(): bool
    {
        return $this->show_strength_bar;
    }

    public function setShowStrengthBar(bool $show_strength_bar): static
    {
        $this->show_strength_bar = $show_strength_bar;

        return $this;
    }
}
