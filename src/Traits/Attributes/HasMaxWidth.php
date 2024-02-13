<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxWidth
{
    protected string|int $max_width;

    public function getMaxWidth(): string|int
    {
        return $this->max_width;
    }

    public function setMaxWidth(string|int $max_width): static
    {
        $this->max_width = $max_width;

        return $this;
    }
}
