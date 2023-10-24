<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuffix
{
    protected $suffix;

    public function getSuffix(): string
    {
        return $this->suffix;
    }

    public function setSuffix(string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }
}
