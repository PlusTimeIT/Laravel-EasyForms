<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasSize,
    HasTooltip,
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class Icon
{
    use HasColor;
    use HasSize;
    use HasTooltip;
    use Transformable;

    protected $icon;

    public function __construct()
    {
        return $this;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public static function make(string $icon = '', string $tooltip = '')
    {
        return ( new static())->setIcon($icon)->setTooltip($tooltip);
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }
}
