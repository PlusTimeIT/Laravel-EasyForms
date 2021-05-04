<?php

namespace PlusTimeIT\Traits\Attributes;

trait HasItemId
{
    protected $item_text = 'value';

    public function getItemId()
    {
        return $this->item_text;
    }

    public function setItemId($id): self
    {
        $this->item_text = $id;

        return $this;
    }
}
