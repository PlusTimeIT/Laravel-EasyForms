<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHeight
{
    protected string|int $height;

    public function getHeight(): string|int
    {
        return $this->height;
    }

    public function setHeight(string|int $height): static
    {
        $this->height = $height;

        return $this;
    }
}
