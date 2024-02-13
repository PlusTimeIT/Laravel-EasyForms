<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAttach
{
    protected bool $attach = false;

    public function getAttach(): string|bool
    {
        return $this->attach;
    }

    public function setAttach(string|bool $attach): static
    {
        $this->attach = $attach;

        return $this;
    }
}
