<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOrigin
{
    protected $origin = 'center center';

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }
}
