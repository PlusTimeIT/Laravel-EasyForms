<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasPrependIcon
{
    protected Icon|string $prepend_icon;

    public function getPrependIcon(): Icon|string
    {
        return $this->prepend_icon;
    }

    public function setPrependIcon(Icon|string $prepend_icon): static
    {
        $this->prepend_icon = $prepend_icon;

        return $this;
    }
}
