<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\SelectItem;

trait HasItems
{
    protected $items = [];
    protected $itemType = SelectItem::class;

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function addItem(SelectItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}