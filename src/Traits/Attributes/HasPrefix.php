<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPrefix
{
    protected string $prefix;

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): static
    {
        $this->prefix = $prefix;

        return $this;
    }
}
