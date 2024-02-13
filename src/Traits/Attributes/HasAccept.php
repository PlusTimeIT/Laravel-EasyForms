<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAccept
{
    protected string $accept = '*';

    public function getAccept(): string
    {
        return $this->accept;
    }

    public function setAccept(string $accept): static
    {
        $this->accept = $accept;

        return $this;
    }
}
