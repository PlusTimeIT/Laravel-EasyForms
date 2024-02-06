<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * ProgressLinear element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class ProgressLinear
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAbsolute;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasActive;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBgColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasBgOpacity;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasClasses;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasHeight;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasIndeterminate;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLocation;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasReverse;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRounded;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasRoundedBar;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStream;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasStriped;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasTheme;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected bool $clickable = false;
}
