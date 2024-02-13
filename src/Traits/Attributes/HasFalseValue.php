<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFalseValue
{
    protected mixed $false_value;

    public function getFalseValue(): mixed
    {
        return $this->false_value;
    }

    public function setFalseValue(mixed $false_value): static
    {
        $this->false_value = $false_value;

        return $this;
    }
}
