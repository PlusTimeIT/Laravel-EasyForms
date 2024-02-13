<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\SelectItem;

trait HasItems
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItemChildren;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItemColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItemProps;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItemTitle;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItemValue;

    protected array $items = [];

    protected string $itemType = SelectItem::class;

    public function addItem(SelectItem $item): static
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
        foreach ($items as $item) {
            if (! $item instanceof $this->itemType) {
                $this->items[] = $this->itemType::make($item);

                continue;
            }
            $this->items[] = $item;
        }

        return $this;
    }
}
