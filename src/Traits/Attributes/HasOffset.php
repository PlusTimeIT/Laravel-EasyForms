<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOffset
{
    protected $offset = 0;

    public function getOffset(): int|string
    {
        return $this->offset;
    }

    public function setOffset(int|string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }
}
