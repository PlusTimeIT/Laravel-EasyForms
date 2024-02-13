<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHint
{
    protected string $hint = '';

    public function getHint(): string
    {
        return $this->hint;
    }

    public function setHint(string $hint): static
    {
        $this->hint = $hint;

        return $this;
    }
}
