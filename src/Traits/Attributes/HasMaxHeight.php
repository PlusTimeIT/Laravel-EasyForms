<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxHeight
{
    protected string|int $max_height;

    public function getMaxHeight(): string|int
    {
        return $this->max_height;
    }

    public function setMaxHeight(string|int $max_height): static
    {
        $this->max_height = $max_height;

        return $this;
    }
}
