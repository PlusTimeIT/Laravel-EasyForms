<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasType
{
    protected string $type = '';

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
