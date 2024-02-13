<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSpecial
{
    protected bool $special = false;

    public function getSpecial(): bool
    {
        return $this->special;
    }

    public function setSpecial(bool $special): static
    {
        $this->special = $special;

        return $this;
    }
}
