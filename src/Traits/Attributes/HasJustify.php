<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasJustify
{
    protected string $justify = 'center';

    public function getJustify(): string
    {
        return $this->justify;
    }

    public function setJustify(string $justify): self
    {
        $this->justify = $justify;

        return $this;
    }
}
