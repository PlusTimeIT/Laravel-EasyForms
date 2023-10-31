<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemColor
{
    protected $item_color;

    public function getItemColor(): string
    {
        return $this->item_color;
    }

    public function setItemColor(string $item_color): self
    {
        $this->item_color = $item_color;

        return $this;
    }
}
