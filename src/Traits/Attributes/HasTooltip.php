<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Tooltip;

trait HasTooltip
{
    protected $tooltip;

    public function getTooltip(): Tooltip
    {
        return $this->tooltip;
    }

    public function setTooltip(Tooltip $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }
}
