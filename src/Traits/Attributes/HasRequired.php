<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRequired
{
    protected bool $required = false;

    public function getRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): static
    {
        $this->required = $required;

        return $this;
    }
}
