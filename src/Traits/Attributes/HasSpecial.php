<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSpecial
{
    protected $special = false;

    public function getSpecial(): bool
    {
        return $this->special;
    }

    public function setSpecial(bool $special): self
    {
        $this->special = $special;

        return $this;
    }
}
