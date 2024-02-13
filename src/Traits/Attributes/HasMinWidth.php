<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinWidth
{
    protected string|int $min_width;

    public function getMinWidth(): string|int
    {
        return $this->min_width;
    }

    public function setMinWidth(string|int $min_width): static
    {
        $this->min_width = $min_width;

        return $this;
    }
}
