<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasIdentifier
{
    protected string $identifier;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): static
    {
        $this->identifier = $identifier;

        return $this;
    }
}
