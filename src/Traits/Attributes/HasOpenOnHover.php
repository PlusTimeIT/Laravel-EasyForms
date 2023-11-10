<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnHover
{
    protected bool $open_on_hover = false;

    public function getOpenOnHover(): bool
    {
        return $this->open_on_hover;
    }

    public function setOpenOnHover(bool $open_on_hover): self
    {
        $this->open_on_hover = $open_on_hover;

        return $this;
    }
}
