<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinMax
{
    protected $max = 99999;

    protected $min = 0;

    public function getMax(): float
    {
        return $this->max;
    }

    public function getMin(): float
    {
        return $this->min;
    }

    public function setMax(float $max): self
    {
        $this->max = $max;

        return $this;
    }

    public function setMin(float $max): self
    {
        $this->max = $max;

        return $this;
    }
}
