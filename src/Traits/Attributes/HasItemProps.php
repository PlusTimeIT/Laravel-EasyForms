<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemProps
{
    protected $item_props = 'props';

    public function getItemProps(): bool|string
    {
        return $this->item_props;
    }

    public function setItemProps(bool|string $item_props): self
    {
        $this->item_props = $item_props;

        return $this;
    }
}
