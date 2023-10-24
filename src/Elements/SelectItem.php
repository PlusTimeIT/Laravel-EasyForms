<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class SelectItem
{
    use Creatable;
    use HasId;
    use HasValue;
    use Transformable;
}
