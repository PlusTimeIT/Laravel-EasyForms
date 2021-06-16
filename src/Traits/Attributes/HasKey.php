<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasKey
{
    protected $key;

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }
}
