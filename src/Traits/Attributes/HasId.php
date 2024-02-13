<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasId
{
    protected string $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }
}
