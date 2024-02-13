<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuffix
{
    protected string $suffix;

    public function getSuffix(): string
    {
        return $this->suffix;
    }

    public function setSuffix(string $suffix): static
    {
        $this->suffix = $suffix;

        return $this;
    }
}
