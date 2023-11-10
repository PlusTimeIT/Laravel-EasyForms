<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Fields\RadioGroupField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLabel;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Radio Item to help provide conformity on frontend RadioGroupField
 *
 * @see RadioGroupField
 */
class RadioItem
{
    use Creatable;
    use HasColor;
    use HasLabel;
    use HasValue;
    use Transformable;
}
