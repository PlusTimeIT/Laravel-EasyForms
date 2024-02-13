<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasPrependInnerIcon
{
    protected Icon|string $prepend_inner_icon;

    public function getPrependInnerIcon(): Icon|string
    {
        return $this->prepend_inner_icon;
    }

    public function setPrependInnerIcon(Icon|string $prepend_inner_icon): static
    {
        $this->prepend_inner_icon = $prepend_inner_icon;

        return $this;
    }
}
