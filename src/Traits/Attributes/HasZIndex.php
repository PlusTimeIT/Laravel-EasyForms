<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasZIndex
{
    protected $z_index;

    public function getZIndex(): string|int
    {
        return $this->z_index;
    }

    public function setZIndex(string|int $z_index): self
    {
        $this->z_index = $z_index;

        return $this;
    }
}
