<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnFocus
{
    protected bool $open_on_focus = false;

    public function getOpenOnFocus(): bool
    {
        return $this->open_on_focus;
    }

    public function setOpenOnFocus(bool $open_on_focus): static
    {
        $this->open_on_focus = $open_on_focus;

        return $this;
    }
}
