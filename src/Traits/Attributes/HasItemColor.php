<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemColor
{
    protected string $item_color;

    public function getItemColor(): string
    {
        return $this->item_color;
    }

    public function setItemColor(string $item_color): static
    {
        $this->item_color = $item_color;

        return $this;
    }
}
