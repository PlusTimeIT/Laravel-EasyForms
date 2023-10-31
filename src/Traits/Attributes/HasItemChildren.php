<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemChildren
{
    protected $item_children = false;

    public function getItemChildren(): bool|string
    {
        return $this->item_children;
    }

    public function setItemChildren(bool|string $item_children): self
    {
        $this->item_children = $item_children;

        return $this;
    }
}
