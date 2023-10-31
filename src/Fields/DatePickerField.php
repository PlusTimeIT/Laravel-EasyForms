<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCloseOnContentClick;
use PlusTimeIT\EasyForms\Traits\Attributes\HasControls;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a date picker field in a form.
 *
 * @extends EasyField
 */
class DatePickerField extends EasyField
{
    use HasCloseOnContentClick;
    use HasControls;
    use HasMultiple;
    use Transformable;

    protected $component = 'date-picker';

    protected $discriminator = 'DatePickerField';

    protected $type = 'date-picker';
}
