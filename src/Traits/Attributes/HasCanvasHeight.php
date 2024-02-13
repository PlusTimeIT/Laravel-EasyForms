<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCanvasHeight
{
    protected int $canvas_height = 150;

    public function getCanvasHeight(): string|int
    {
        return $this->canvas_height;
    }

    public function setCanvasHeight(string|int $canvas_height): static
    {
        $this->canvas_height = $canvas_height;

        return $this;
    }
}
