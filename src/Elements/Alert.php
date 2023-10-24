<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasAlertType;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAutoCloseTimer;
use PlusTimeIT\EasyForms\Traits\Attributes\HasBorder;
use PlusTimeIT\EasyForms\Traits\Attributes\HasBorderColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasButtonVariant;
use PlusTimeIT\EasyForms\Traits\Attributes\HasClosable;
use PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCols;
use PlusTimeIT\EasyForms\Traits\Attributes\HasContentPlaceholder;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDensity;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDisplay;
use PlusTimeIT\EasyForms\Traits\Attributes\HasElevation;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHeight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasIcon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxHeight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxWidth;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinHeight;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinWidth;
use PlusTimeIT\EasyForms\Traits\Attributes\HasOrder;
use PlusTimeIT\EasyForms\Traits\Attributes\HasOriginalText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasPosition;
use PlusTimeIT\EasyForms\Traits\Attributes\HasProminent;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRounded;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTag;
use PlusTimeIT\EasyForms\Traits\Attributes\HasText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTextStyle;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTransition;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTrigger;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class Alert
{
    use Creatable;
    use HasAlertType;
    use HasAutoCloseTimer;
    use HasBorder;
    use HasBorderColor;
    use HasButtonVariant;
    use HasClosable;
    use HasColor;
    use HasCols;
    use HasContentPlaceholder;
    use HasDensity;
    use HasDisplay;
    use HasElevation;
    use HasHeight;
    use HasIcon;
    use HasMaxHeight;
    use HasMaxWidth;
    use HasMinHeight;
    use HasMinWidth;
    use HasOrder;
    use HasOriginalText;
    use HasPosition;
    use HasProminent;
    use HasRounded;
    use HasTag;
    use HasText;
    use HasTextStyle;
    use HasTransition;
    use HasTrigger;
    use Transformable;
}
