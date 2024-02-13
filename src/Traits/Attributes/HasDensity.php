<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\DensityTypes;

trait HasDensity
{
    protected $density = DensityTypes::Default;

    public function getDensity(): DensityTypes
    {
        return $this->density;
    }

    public function setDensity(DensityTypes $density): static
    {
        $this->density = $density;

        return $this;
    }
}
