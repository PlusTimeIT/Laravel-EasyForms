<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasName;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class RuleItem
{
    use Creatable;
    use HasName;
    use HasValue;
    use Transformable;
}
