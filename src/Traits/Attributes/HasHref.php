<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHref
{
    protected string $href;

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;

        return $this;
    }
}
