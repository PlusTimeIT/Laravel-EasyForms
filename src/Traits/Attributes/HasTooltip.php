<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTooltip
{
    protected $tooltip = '';

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public function setTooltip(string $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }
}
