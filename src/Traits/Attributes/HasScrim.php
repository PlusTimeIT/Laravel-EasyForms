<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasScrim
{
    protected string|bool $scrim = false;

    public function getScrim(): string|bool
    {
        return $this->scrim;
    }

    public function setScrim(string|bool $scrim): static
    {
        $this->scrim = $scrim;

        return $this;
    }
}
