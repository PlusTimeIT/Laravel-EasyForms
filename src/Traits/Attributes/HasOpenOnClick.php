<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnClick
{
    protected bool $open_on_click = true;

    public function getOpenOnClick(): bool
    {
        return $this->open_on_click;
    }

    public function setOpenOnClick(bool $open_on_click): static
    {
        $this->open_on_click = $open_on_click;

        return $this;
    }
}
