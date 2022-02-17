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
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class ActionButton
{
    use Creatable;
    use HasButton;
    use HasCallback;
    use HasCols;
    use HasConditions;
    use HasIdentifier;
    use HasName;
    use HasOrder;
    use Transformable;
}
