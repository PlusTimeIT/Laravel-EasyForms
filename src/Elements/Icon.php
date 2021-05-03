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

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public static function make(string $icon = '' , string $tooltip = '')
    {
        return ( new static())->setIcon($icon)->setTooltip($tooltip);
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

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    protected $icon;

    protected $size;

    protected $color = 'primary';

    protected $tooltip;

    use Transformable;
}
