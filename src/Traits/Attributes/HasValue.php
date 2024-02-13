<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasValue
{
    protected mixed $value;

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setValue(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }
}
