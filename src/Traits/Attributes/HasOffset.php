<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOffset
{
    protected int|string $offset = 0;

    public function getOffset(): int|string
    {
        return $this->offset;
    }

    public function setOffset(int|string $offset): static
    {
        $this->offset = $offset;

        return $this;
    }
}
