<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasButton,
    HasCallback,
    HasCols,
    HasConditions,
    HasIdentifier,
    HasName,
    HasOrder
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class ActionButton
{
    use HasButton;
    use HasCallback;
    use HasCols;
    use HasConditions;
    use HasIdentifier;
    use HasName;
    use HasOrder;
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
