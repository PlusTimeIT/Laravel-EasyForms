<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActive
{
    protected $active = false;

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
