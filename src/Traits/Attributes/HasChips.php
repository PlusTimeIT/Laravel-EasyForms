<?php

namespace PlusTimeIT\Traits\Attributes;

trait HasChips
{
    protected $chips = false;

    public function getChips(): bool
    {
        return $this->chips;
    }

    public function setChips(bool $chips): self
    {
        $this->chips = $chips;

        return $this;
    }
}
