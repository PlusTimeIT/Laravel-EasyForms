<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasAppendIcon
{
    protected Icon|string $append_icon;

    public function getAppendIcon(): Icon|string
    {
        return $this->append_icon;
    }

    public function setAppendIcon(Icon|string $append_icon): static
    {
        $this->append_icon = $append_icon;

        return $this;
    }
}
