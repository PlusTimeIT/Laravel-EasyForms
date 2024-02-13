<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNumbers
{
    protected bool $numbers = false;

    public function getNumbers(): bool
    {
        return $this->numbers;
    }

    public function setNumbers(bool $numbers): static
    {
        $this->numbers = $numbers;

        return $this;
    }
}
