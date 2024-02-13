<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAutoFocus
{
    protected bool $auto_focus = false;

    public function getAutoFocus(): bool
    {
        return $this->auto_focus;
    }

    public function setAutoFocus(bool $auto_focus): static
    {
        $this->auto_focus = $auto_focus;

        return $this;
    }
}
