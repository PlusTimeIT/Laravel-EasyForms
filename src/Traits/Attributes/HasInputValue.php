<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasInputValue
{
    protected $input_value;

    public function getInputValue()
    {
        return $this->input_value;
    }

    public function setInputValue($input_value): self
    {
        $this->input_value = $input_value;

        return $this;
    }
}
