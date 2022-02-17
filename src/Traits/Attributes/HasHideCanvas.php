<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHideCanvas
{
    protected $hide_canvas = FALSE;

    public function getHideCanvas(): bool
    {
        return $this->hide_canvas;
    }

    public function setHideCanvas(bool $hide_canvas): self
    {
        $this->hide_canvas = $hide_canvas;
        return $this;
    }
}
