<?php
namespace PlusTimeIT\EasyForms\Elements;

class Icon
{
    public function __construct(string $icon, string $tooltip)
    {
        $this->icon = $icon;
        $this->tooltip = $tooltip;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setTooptip(string $tooltip): self
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    protected $icon;

    protected $tooltip;

    use ConvertTraits;
}
