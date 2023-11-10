<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasClass
{
    protected string $class = 'p-4';

    public function getClass(): string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }
}
