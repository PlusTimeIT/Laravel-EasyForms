<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a time picker field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class TimePickerField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasAmPmInTitle;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasNoTitle;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'easy-time-picker';

    protected string $discriminator = 'TimePickerField';
}
