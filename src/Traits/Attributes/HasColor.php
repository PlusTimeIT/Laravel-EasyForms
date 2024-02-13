<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasColor
{
    protected string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }
}
