<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistentHint
{
    protected bool $persistent_hint = false;

    public function getPersistentHint(): bool
    {
        return $this->persistent_hint;
    }

    public function setPersistentHint(bool $persistent_hint): static
    {
        $this->persistent_hint = $persistent_hint;

        return $this;
    }
}
