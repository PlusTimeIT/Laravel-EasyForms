<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPrependIcon
{
    protected $prepend_icon;

    public function getPrependIcon(): string
    {
        return $this->prepend_icon;
    }

    public function setPrependIcon(string $prepend_icon): self
    {
        $this->prepend_icon = $prepend_icon;

        return $this;
    }
}
