<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasSize,
    HasTooltip,
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class Icon
{
    use Creatable;
    use HasColor;
    use HasSize;
    use HasTooltip;
    use Transformable;

    protected $icon;

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }
}
