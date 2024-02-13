<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPersistentPlaceholder
{
    protected bool $persistent_placeholder = false;

    public function getPersistentPlaceholder(): bool
    {
        return $this->persistent_placeholder;
    }

    public function setPersistentPlaceholder(bool $persistent_placeholder): static
    {
        $this->persistent_placeholder = $persistent_placeholder;

        return $this;
    }
}
