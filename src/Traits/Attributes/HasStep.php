<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStep
{
    protected $step = 1;

    public function getStep(): float
    {
        return $this->step;
    }

    public function setStep(float $step): self
    {
        $this->step = $step;

        return $this;
    }
}
