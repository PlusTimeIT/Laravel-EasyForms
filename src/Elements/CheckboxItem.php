<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCols;
use PlusTimeIT\EasyForms\Traits\Attributes\HasId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLabel;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxItem
{
    use Creatable;
    use HasColor;
    use HasCols;
    use HasId;
    use HasLabel;
    use HasValue;
    use Transformable;
}
