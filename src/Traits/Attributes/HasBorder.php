<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBorder
{
    protected $border = 'left';

    public function getBorder(): string
    {
        return $this->border;
    }

    public function setBorder(string $border): self
    {
        $this->border = $border;

        return $this;
    }
}
