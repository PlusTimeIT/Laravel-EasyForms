<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBorderColor
{
    protected ?string $border_color;

    public function getBorderColor(): string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): static
    {
        $this->border_color = $border_color;

        return $this;
    }
}
