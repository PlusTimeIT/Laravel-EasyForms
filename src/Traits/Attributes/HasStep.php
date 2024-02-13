<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStep
{
    protected float $step = 1;

    public function getStep(): float
    {
        return $this->step;
    }

    public function setStep(float $step): static
    {
        $this->step = $step;

        return $this;
    }
}
