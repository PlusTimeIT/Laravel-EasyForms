<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasScrim
{
    protected $scrim = false;

    public function getScrim(): string | bool
    {
        return $this->scrim;
    }

    public function setScrim(string | bool $scrim): self
    {
        $this->scrim = $scrim;

        return $this;
    }
}
