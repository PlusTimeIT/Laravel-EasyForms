<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasEnd;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSize;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStart;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTheme;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTooltip;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Easy Icon that will provide additional options like tooltips.
 */
class Icon
{
    use Creatable;
    use HasColor;
    use HasEnd;
    use HasSize;
    use HasStart;
    use HasTag;
    use HasTheme;
    use HasTooltip;
    use Transformable;

    protected string $icon;

    public function __construct(array $args)
    {
        $this->setOptions($args);
        $this->tag = $this->tag ?? 'i';

        return $this;
    }

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
