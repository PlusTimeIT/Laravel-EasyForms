<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasChips
{
    protected bool $chips = false;

    public function getChips(): bool
    {
        return $this->chips;
    }

    public function setChips(bool $chips): static
    {
        $this->chips = $chips;

        return $this;
    }
}
