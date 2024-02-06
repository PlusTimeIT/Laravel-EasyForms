<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a date picker field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class DatePickerField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCloseOnContentClick;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasControls;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'easy-date-picker';

    protected string $discriminator = 'DatePickerField';
}
