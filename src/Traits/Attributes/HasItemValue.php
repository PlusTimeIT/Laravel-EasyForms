<?php

namespace PlusTimeIT\Traits\Attributes;

trait HasItemValue
{
    protected $item_value = 'id';

    public function getItemValue(): string
    {
        return $this->item_value;
    }

    public function setItemValue(string $value): self
    {
        $this->item_value = $value;

        return $this;
    }
}
