<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActive
{
    protected bool $active = false;

    public function active(): bool
    {
        return $this->active;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): static
    {
        $this->active = $active;

        return $this;
    }
}
