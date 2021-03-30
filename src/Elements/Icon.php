<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class Icon
{
    public function __construct()
    {
        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public static function make()
    {
        return new static();
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setTooltip(string $tooltip): self
    {
        $this->tooltip = $tooltip;
        return $this;
    }

    protected $icon;

    protected $tooltip;

    use Transformable;
}
