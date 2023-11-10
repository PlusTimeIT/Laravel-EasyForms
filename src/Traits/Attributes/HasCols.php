<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCols
{
    protected ?int $cols = 12;

    public function getCols(): ?int
    {
        return $this->cols;
    }

    public function setCols(?int $cols): self
    {
        $this->cols = $cols;

        return $this;
    }
}
