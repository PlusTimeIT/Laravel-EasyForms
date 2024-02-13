<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDotSize
{
    protected int|string $dot_size = 10;

    public function getDotSize(): int|string
    {
        return $this->dot_size;
    }

    public function setDotSize(int|string $dot_size): static
    {
        $this->dot_size = $dot_size;

        return $this;
    }
}
