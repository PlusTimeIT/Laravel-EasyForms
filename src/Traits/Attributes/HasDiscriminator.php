<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

/**
 * HasDiscriminator is used to determine the Class to instantiate the object as.
 */
trait HasDiscriminator
{
    protected string $discriminator;

    public function getDiscriminator(): string
    {
        return $this->discriminator;
    }

    public function setDiscriminator(string $discriminator): static
    {
        $this->discriminator = $discriminator;

        return $this;
    }
}
