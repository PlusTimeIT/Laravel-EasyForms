<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Tooltip;

trait HasTooltip
{
    protected Tooltip $tooltip;

    public function getTooltip(): Tooltip
    {
        return $this->tooltip;
    }

    public function hasTooltip(): bool
    {
        return isset($this->tooltip);
    }

    public function setTooltip(Tooltip $tooltip): static
    {
        $this->tooltip = $tooltip;

        return $this;
    }
}
