<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRoundedBar
{
    protected bool $rounded_bar = false;

    public function getRoundedBar(): bool
    {
        return $this->rounded_bar;
    }

    public function setRoundedBar(bool $rounded_bar): static
    {
        $this->rounded_bar = $rounded_bar;

        return $this;
    }
}
