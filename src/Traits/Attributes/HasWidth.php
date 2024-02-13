<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasWidth
{
    protected string|int $width = 300;

    public function getWidth(): string|int
    {
        return $this->width;
    }

    public function setWidth(string|int $width): static
    {
        $this->width = $width;

        return $this;
    }
}
