<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMinMax
{
    protected int $max = 99999;

    protected int $min = 0;

    public function getMax(): int
    {
        return $this->max;
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function setMax(int $max): static
    {
        $this->max = $max;

        return $this;
    }

    public function setMin(int $min): static
    {
        $this->min = $min;

        return $this;
    }
}
