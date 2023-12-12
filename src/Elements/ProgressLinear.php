<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * ProgressLinear element that triggers an action / function within the backend class.
 * This can be a process, reset or cancel button.
 */
class ProgressLinear
{
    use Attributes\HasAbsolute;
    use Attributes\HasActive;
    use Attributes\HasBgColor;
    use Attributes\HasBgOpacity;
    use Attributes\HasClasses;
    use Attributes\HasColor;
    use Attributes\HasHeight;
    use Attributes\HasIndeterminate;
    use Attributes\HasLocation;
    use Attributes\HasReverse;
    use Attributes\HasRounded;
    use Attributes\HasRoundedBar;
    use Attributes\HasStream;
    use Attributes\HasStriped;
    use Attributes\HasTag;
    use Attributes\HasTheme;
    use Creatable;
    use Transformable;

    protected bool $clickable = false;
}
