<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Select Item to help provide conformity on frontend for Select and Autocomplete fields
 *
 * @see SelectField
 * @see AutoCompleteField
 */
class SelectItem
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasId;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;
}
