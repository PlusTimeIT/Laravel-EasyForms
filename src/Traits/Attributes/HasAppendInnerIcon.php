<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasAppendInnerIcon
{
    protected Icon|string $append_inner_icon;

    public function getAppendInnerIcon(): Icon|string
    {
        return $this->append_inner_icon;
    }

    public function setAppendInnerIcon(Icon|string $append_inner_icon): static
    {
        $this->append_inner_icon = $append_inner_icon;

        return $this;
    }
}
