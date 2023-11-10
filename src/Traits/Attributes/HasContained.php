<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContained
{
    protected bool $contained = false;

    public function getContained(): bool
    {
        return $this->contained;
    }

    public function setContained(bool $contained): self
    {
        $this->contained = $contained;

        return $this;
    }
}
