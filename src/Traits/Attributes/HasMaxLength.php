<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxLength
{
    protected $maxlength;

    public function getMaxLength(): ?int
    {
        return $this->maxlength;
    }

    public function setMaxLength(?int $maxlength): self
    {
        $this->maxlength = $maxlength;

        return $this;
    }
}
