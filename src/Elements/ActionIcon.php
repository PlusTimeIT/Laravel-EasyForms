<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasCallback,
    HasCols,
    HasConditions,
    HasIcon,
    HasIdentifier,
    HasName,
    HasOrder
};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

// TODO Create ActionIcon Interface and Traits
class ActionIcon
{
    use Creatable;
    use HasCallback;
    use HasCols;
    use HasConditions;
    use HasIcon;
    use HasIdentifier;
    use HasName;
    use HasOrder;
    use Transformable;
}
