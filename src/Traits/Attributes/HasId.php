<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasId
{
    protected string|int $id;

    public function getId(): string|int
    {
        return $this->id;
    }

    public function setId(string|int $id): static
    {
        $this->id = $id;

        return $this;
    }
}
