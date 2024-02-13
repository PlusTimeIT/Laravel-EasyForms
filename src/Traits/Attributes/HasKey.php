<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasKey
{
    protected string $key;

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): static
    {
        $this->key = $key;

        return $this;
    }
}
