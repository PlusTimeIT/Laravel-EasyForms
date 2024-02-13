<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasZIndex
{
    protected string|int $z_index;

    public function getZIndex(): string|int
    {
        return $this->z_index;
    }

    public function setZIndex(string|int $z_index): static
    {
        $this->z_index = $z_index;

        return $this;
    }
}
