<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAmPmInTitle;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNoTitle;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a time picker field in a form.
 *
 * @extends EasyField
 */
class TimePickerField extends EasyField
{
    use HasAmPmInTitle;
    use HasMultiple;
    use HasNoTitle;
    use Transformable;

    protected string $component = 'easy-time-picker';

    protected string $discriminator = 'TimePickerField';
}
