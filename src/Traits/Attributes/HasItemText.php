<?php

namespace PlusTimeIT\Traits\Attributes;

trait HasItemText
{
    protected $item_text = 'value';

    public function getItemText(): string
    {
        return $this->item_text;
    }

    public function setItemText(string $text): self
    {
        $this->item_text = $text;

        return $this;
    }
}
