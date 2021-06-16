<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAmPmInTitle, HasMultiple, HasNoTitle};
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class TimePickerField extends EasyField
{
    use HasAmPmInTitle;
    use HasMultiple;
    use HasNoTitle;
    use Transformable;

    protected $component = 'time-picker';

    protected $type = 'time-picker';
}
