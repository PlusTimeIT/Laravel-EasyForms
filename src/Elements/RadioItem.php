<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasColor,
    HasLabel,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class RadioItem
{
    use HasColor;
    use HasLabel;
    use HasValue;
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
