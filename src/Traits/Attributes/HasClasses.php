<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasClasses
{
    protected string $classes = 'p-4';

    public function getClasses(): string
    {
        return $this->classes;
    }

    public function setClasses(string $classes): static
    {
        $this->classes = $classes;

        return $this;
    }
}
