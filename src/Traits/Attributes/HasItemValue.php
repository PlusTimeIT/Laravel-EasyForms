<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemValue
{
    protected string $item_value = 'id';

    public function getItemValue(): string
    {
        return $this->item_value;
    }

    public function setItemValue(string $value): static
    {
        $this->item_value = $value;

        return $this;
    }
}
