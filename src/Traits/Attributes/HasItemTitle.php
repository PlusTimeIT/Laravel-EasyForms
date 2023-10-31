<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasItemTitle
{
    protected $item_title = 'value';

    public function getItemTitle(): string
    {
        return $this->item_title;
    }

    public function setItemTitle(string $item_title): self
    {
        $this->item_title = $item_title;

        return $this;
    }
}
