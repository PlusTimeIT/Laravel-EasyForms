<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinLength
{
    protected string|int $min_length;

    public function getMinLength(): string|int
    {
        return $this->min_length;
    }

    public function setMinLength(string|int $min_length): static
    {
        $this->min_length = $min_length;

        return $this;
    }
}
