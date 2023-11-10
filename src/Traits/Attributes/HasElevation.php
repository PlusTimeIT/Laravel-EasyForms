<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasElevation
{
    protected int $elevation = 0;

    public function getElevation(): int
    {
        return $this->elevation;
    }

    public function setElevation(int $elevation): self
    {
        $this->elevation = $elevation;

        return $this;
    }
}
