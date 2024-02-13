<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBaseColor
{
    protected string $base_color;

    public function getBaseColor(): string
    {
        return $this->base_color;
    }

    public function setBaseColor(string $base_color): static
    {
        $this->base_color = $base_color;

        return $this;
    }
}
