<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasEnd
{
    protected bool $end = false;

    public function getEnd(): bool
    {
        return $this->end;
    }

    public function setEnd(bool $end): self
    {
        $this->end = $end;

        return $this;
    }
}
