<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasClosableChips
{
    protected bool $closable_chips = false;

    public function getClosableChips(): bool
    {
        return $this->closable_chips;
    }

    public function setClosableChips(bool $closable_chips): static
    {
        $this->closable_chips = $closable_chips;

        return $this;
    }
}
