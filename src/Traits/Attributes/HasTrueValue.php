<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTrueValue
{
    protected $true_value;

    public function getTrueValue()
    {
        return $this->true_value;
    }

    public function setTrueValue($true_value): self
    {
        $this->true_value = $true_value;

        return $this;
    }
}
