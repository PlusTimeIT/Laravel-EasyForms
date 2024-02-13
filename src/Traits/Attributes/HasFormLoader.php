<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\FormLoader;

trait HasFormLoader
{
    protected FormLoader $loader;

    public function getLoader(): FormLoader
    {
        return $this->loader;
    }

    public function loader(): FormLoader
    {
        return $this->loader;
    }

    public function setLoader(FormLoader $loader): static
    {
        $this->loader = $loader;

        return $this;
    }
}
