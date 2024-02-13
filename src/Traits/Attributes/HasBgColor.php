<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBgColor
{
    protected string $bg_color;

    public function getBgColor(): string
    {
        return $this->bg_color;
    }

    public function setBgColor(string $bg_color): static
    {
        $this->bg_color = $bg_color;

        return $this;
    }
}
