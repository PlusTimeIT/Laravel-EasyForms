<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLoader
{
    protected bool $loader = false;

    public function getLoader(): bool
    {
        return $this->loader;
    }

    public function keepLoader(): static
    {
        return $this->setLoader(true);
    }

    public function setLoader(bool $loader): static
    {
        $this->loader = $loader;

        return $this;
    }
}
