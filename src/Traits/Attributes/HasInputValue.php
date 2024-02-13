<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasInputValue
{
    protected mixed $input_value;

    public function getInputValue(): mixed
    {
        return $this->input_value;
    }

    public function setInputValue(mixed $input_value): static
    {
        $this->input_value = $input_value;

        return $this;
    }
}
