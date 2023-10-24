<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasClearIcon
{
    protected $clear_icon;

    public function getClearIcon(): Icon | string
    {
        return $this->clear_icon;
    }

    public function setClearIcon(Icon | string $clear_icon): self
    {
        $this->clear_icon = $clear_icon;
        return $this;
    }
}
