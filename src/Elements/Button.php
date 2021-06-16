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
use PlusTimeIT\EasyForms\Traits\Transformable;

class Button
{
    use HasClass;
    use HasColor;
    use HasIcon;
    use HasOrder;
    use HasRounded;
    use HasText;
    use HasType;
    use Transformable;

    public function __construct()
    {
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
