<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStacked
{
    protected bool $stacked = false;

    public function getStacked(): bool
    {
        return $this->stacked;
    }

    public function setStacked(bool $stacked): self
    {
        $this->stacked = $stacked;

        return $this;
    }
}
