<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasBlock
{
    protected bool $block = false;

    public function getBlock(): bool
    {
        return $this->block;
    }

    public function setBlock(bool $block): self
    {
        $this->block = $block;

        return $this;
    }
}
