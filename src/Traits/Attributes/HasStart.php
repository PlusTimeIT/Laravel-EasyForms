<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStart
{
    protected bool $start = false;

    public function getStart(): bool
    {
        return $this->start;
    }

    public function setStart(bool $start): self
    {
        $this->start = $start;

        return $this;
    }
}
