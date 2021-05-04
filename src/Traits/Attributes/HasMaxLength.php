<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxLength
{
    protected $maxlength;

    public function getMaxLength(): int | null
    {
        return $this->maxlength;
    }

    public function setMaxLength(int | null $maxlength): self
    {
        $this->maxlength = $maxlength;

        return $this;
    }
}
