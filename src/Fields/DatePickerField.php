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

    protected $component = 'date-picker';

    protected $type = 'date-picker';
}
