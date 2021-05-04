<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasCloseOnContentClick, HasControls, HasMultiple};
use PlusTimeIT\EasyForms\Traits\Transformable;

class DatePickerField extends EasyField
{
    use HasCloseOnContentClick;
    use HasControls;
    use HasMultiple;
    use Transformable;

    public const TYPE = 'date-picker';

    protected $component = 'date-picker';

    protected $value = '';
}
