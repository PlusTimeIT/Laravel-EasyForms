<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHint
{
    protected $hint = '';

    public function getHint(): string
    {
        return $this->hint;
    }

    public function setHint(string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }
}
