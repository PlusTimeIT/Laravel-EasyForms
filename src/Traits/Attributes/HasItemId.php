<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemId
{
    protected string $item_text = 'value';

    public function getItemId(): string
    {
        return $this->item_text;
    }

    public function setItemId(string $id): static
    {
        $this->item_text = $id;

        return $this;
    }
}
