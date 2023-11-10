<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAttach
{
    protected bool $attach = false;

    public function getAttach(): string|bool
    {
        return $this->attach;
    }

    public function setAttach(string|bool $attach): self
    {
        $this->attach = $attach;

        return $this;
    }
}
