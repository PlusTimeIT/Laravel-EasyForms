<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Checkbox Item to help provide conformity on frontend CheckboxGroupField
 *
 * @see CheckboxGroupField
 */
class CheckboxItem
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasColor;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCols;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasId;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasLabel;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;
}
