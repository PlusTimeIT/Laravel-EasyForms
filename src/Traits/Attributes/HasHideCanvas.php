<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideCanvas
{
    protected bool $hide_canvas = false;

    public function getHideCanvas(): bool
    {
        return $this->hide_canvas;
    }

    public function setHideCanvas(bool $hide_canvas): static
    {
        $this->hide_canvas = $hide_canvas;

        return $this;
    }
}
