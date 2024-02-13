<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTrueValue
{
    protected mixed $true_value;

    public function getTrueValue(): mixed
    {
        return $this->true_value;
    }

    public function setTrueValue(mixed $true_value): static
    {
        $this->true_value = $true_value;

        return $this;
    }
}
