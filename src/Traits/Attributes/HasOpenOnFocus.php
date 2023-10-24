<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnFocus
{
    protected $open_on_focus = false;

    public function getOpenOnFocus(): bool
    {
        return $this->open_on_focus;
    }

    public function setOpenOnFocus(bool $open_on_focus): self
    {
        $this->open_on_focus = $open_on_focus;

        return $this;
    }
}
