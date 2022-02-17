<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasClass,
    HasColor,
    HasIcon,
    HasOrder,
    HasRounded,
    HasText,
    HasType,
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class Button
{
    use Creatable;
    use HasClass;
    use HasColor;
    use HasIcon;
    use HasOrder;
    use HasRounded;
    use HasText;
    use HasType;
    use Transformable;
}
