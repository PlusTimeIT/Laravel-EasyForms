<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasReadOnly
{
    protected bool $readonly = false;

    public function getReadonly(): bool
    {
        return $this->readonly;
    }

    public function setReadonly(bool $readonly): static
    {
        $this->readonly = $readonly;

        return $this;
    }
}
