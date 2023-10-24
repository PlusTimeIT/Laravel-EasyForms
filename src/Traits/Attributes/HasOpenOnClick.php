<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenOnClick
{
    protected $open_on_click = false;

    public function getOpenOnClick(): bool
    {
        return $this->open_on_click;
    }

    public function setOpenOnClick(bool $open_on_click): self
    {
        $this->open_on_click = $open_on_click;

        return $this;
    }
}
