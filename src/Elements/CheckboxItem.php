<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Fields\CheckboxGroupField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCols;
use PlusTimeIT\EasyForms\Traits\Attributes\HasId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLabel;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Checkbox Item to help provide conformity on frontend CheckboxGroupField
 *
 * @see CheckboxGroupField
 */
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
