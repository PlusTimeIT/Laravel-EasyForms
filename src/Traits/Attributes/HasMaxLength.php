<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMaxLength
{
    protected ?int $maxlength = null;

    public function getMaxLength(): ?int
    {
        return $this->maxlength;
    }

    public function setMaxLength(?int $maxlength): static
    {
        $this->maxlength = $maxlength;

        return $this;
    }
}
