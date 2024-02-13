<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOrigin
{
    protected string $origin = 'center center';

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): static
    {
        $this->origin = $origin;

        return $this;
    }
}
