<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Input Button element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class Button
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasActive;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBlock;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBorder;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasButtonVariant;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasClasses;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDensity;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasDisabled;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasElevation;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasFlat;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHeight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHref;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasIcon;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasIcons;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMaxHeight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMaxWidth;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMinHeight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMinWidth;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasOrder;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasPosition;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRounded;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStacked;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSymbol;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasText;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTheme;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasType;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasWidth;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    public function __construct(array $args)
    {
        $this->setOptions($args);
        $this->tag = $args['tag'] ?? 'button';

        return $this;
    }
}
