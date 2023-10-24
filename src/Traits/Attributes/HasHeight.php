<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHeight
{
    protected $height;

    public function getHeight(): string|int
    {
        return $this->height;
    }

    public function setHeight(string|int $height): self
    {
        $this->height = $height;

        return $this;
    }
}
