<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSymbol
{
    protected mixed $symbol = false;

    public function getSymbol(): mixed
    {
        return $this->view_symbolmode;
    }

    public function setSymbol(mixed $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }
}
