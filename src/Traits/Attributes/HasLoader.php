<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLoader
{
    protected $loader = false;

    public function getLoader(): bool
    {
        return $this->loader;
    }

    public function keepLoader()
    {
        return $this->setLoader(true);
    }

    public function setLoader(bool $loader): self
    {
        $this->loader = $loader;

        return $this;
    }
}
