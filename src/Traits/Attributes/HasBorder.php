<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBorder
{
    protected string $border = 'start';

    public function getBorder(): string
    {
        return $this->border;
    }

    public function setBorder(string $border): static
    {
        $this->border = $border;

        return $this;
    }
}
