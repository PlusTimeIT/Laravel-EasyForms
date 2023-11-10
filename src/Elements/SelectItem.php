<?php

namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Fields\AutoCompleteField;
use PlusTimeIT\EasyForms\Fields\SelectField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasValue;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Select Item to help provide conformity on frontend for Select and Autocomplete fields
 *
 * @see SelectField
 * @see AutoCompleteField
 */
class SelectItem
{
    use Creatable;
    use HasId;
    use HasValue;
    use Transformable;
}
