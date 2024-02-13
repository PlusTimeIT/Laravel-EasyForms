<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasIcon
{
    protected Icon $icon;

    public function getIcon(): Icon
    {
        return $this->icon;
    }

    public function setIcon(Icon $icon): static
    {
        $this->icon = $icon;

        return $this;
    }
}
