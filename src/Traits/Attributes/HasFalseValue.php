<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFalseValue
{
    protected $false_value;

    public function getFalseValue()
    {
        return $this->false_value;
    }

    public function setFalseValue($false_value): self
    {
        $this->false_value = $false_value;

        return $this;
    }
}
