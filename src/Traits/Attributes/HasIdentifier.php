<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasIdentifier
{
    protected $identifier;

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }
}
