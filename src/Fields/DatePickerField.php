<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCloseOnContentClick;
use PlusTimeIT\EasyForms\Traits\Attributes\HasControls;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;

class DatePickerField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasMultiple;
    use HasCloseOnContentClick;
    use HasControls;

    public const TYPE = 'date-picker';

    protected $component = 'date-picker';

    protected $value = '';
}
