<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBackgroundColor
{
    protected string $background_color = '';

    public function getBackgroundColor(): string
    {
        return $this->background_color;
    }

    public function setBackgroundColor(string $background_color): static
    {
        $this->background_color = $background_color;

        return $this;
    }
}
