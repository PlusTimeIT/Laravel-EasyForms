<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStriped
{
    protected bool $striped = false;

    public function getStriped(): bool
    {
        return $this->striped;
    }

    public function setStriped(bool $striped): self
    {
        $this->striped = $striped;

        return $this;
    }
}
