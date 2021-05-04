<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait AcceptsFiles
{
    protected $accept = '*';

    public function getAccept(): string
    {
        return $this->accept;
    }

    public function setAccept(string $accept): self
    {
        $this->accept = $accept;

        return $this;
    }
}
