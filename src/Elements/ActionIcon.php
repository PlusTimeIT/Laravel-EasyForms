<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasCallback;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCols;
use PlusTimeIT\EasyForms\Traits\Attributes\HasConditions;
use PlusTimeIT\EasyForms\Traits\Attributes\HasIcon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasIdentifier;
use PlusTimeIT\EasyForms\Traits\Attributes\HasName;
use PlusTimeIT\EasyForms\Traits\Attributes\HasOrder;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

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
