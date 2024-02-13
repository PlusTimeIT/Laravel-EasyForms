<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemText
{
    protected string $item_text = 'value';

    public function getItemText(): string
    {
        return $this->item_text;
    }

    public function setItemText(string $text): static
    {
        $this->item_text = $text;

        return $this;
    }
}
