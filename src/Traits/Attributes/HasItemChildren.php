<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemChildren
{
    protected bool|string $item_children = false;

    public function getItemChildren(): bool|string
    {
        return $this->item_children;
    }

    public function setItemChildren(bool|string $item_children): static
    {
        $this->item_children = $item_children;

        return $this;
    }
}
