<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\CheckboxItem;

trait HasCheckboxItems
{
    protected array $items = [];

    protected string $itemType = CheckboxItem::class;

    public function addItem($item): static
    {
        $this->items[] = $item;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): static
    {
        $this->items = $items;

        return $this;
    }
}
