<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinHeight
{
    protected string|int $min_height;

    public function getMinHeight(): string|int
    {
        return $this->min_height;
    }

    public function setMinHeight(string|int $min_height): static
    {
        $this->min_height = $min_height;

        return $this;
    }
}
