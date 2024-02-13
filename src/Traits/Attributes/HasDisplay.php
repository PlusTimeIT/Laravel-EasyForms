<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDisplay
{
    protected bool $display = false;

    public function getDisplay(): bool
    {
        return $this->display;
    }

    public function setDisplay(bool $display): static
    {
        $this->display = $display;

        return $this;
    }
}
