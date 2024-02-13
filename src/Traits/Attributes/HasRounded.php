<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRounded
{
    protected bool|string|int $rounded = false;

    public function getRounded(): bool|string|int
    {
        return $this->rounded;
    }

    public function setRounded(bool|string|int $rounded): static
    {
        $this->rounded = $rounded;

        return $this;
    }
}
