<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Input Button element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class Button
{
    use Attributes\HasActive;
    use Attributes\HasBlock;
    use Attributes\HasBorder;
    use Attributes\HasButtonVariant;
    use Attributes\HasClasses;
    use Attributes\HasColor;
    use Attributes\HasDensity;
    use Attributes\HasDisabled;
    use Attributes\HasElevation;
    use Attributes\HasFlat;
    use Attributes\HasHeight;
    use Attributes\HasHref;
    use Attributes\HasIcon;
    use Attributes\HasIcons;
    use Attributes\HasMaxHeight;
    use Attributes\HasMaxWidth;
    use Attributes\HasMinHeight;
    use Attributes\HasMinWidth;
    use Attributes\HasOrder;
    use Attributes\HasPosition;
    use Attributes\HasRounded;
    use Attributes\HasStacked;
    use Attributes\HasSymbol;
    use Attributes\HasTag;
    use Attributes\HasText;
    use Attributes\HasTheme;
    use Attributes\HasType;
    use Attributes\HasValue;
    use Attributes\HasWidth;
    use Creatable;
    use Transformable;

    public function __construct(array $args)
    {
        $this->setOptions($args);
        $this->tag = $args['tag'] ?? 'button';

        return $this;
    }
}
