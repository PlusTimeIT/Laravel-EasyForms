<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasInline
{
    protected bool $inline;

    public function getInline(): bool
    {
        return $this->inline;
    }

    public function setInline(bool $inline): self
    {
        $this->inline = $inline;

        return $this;
    }
}
