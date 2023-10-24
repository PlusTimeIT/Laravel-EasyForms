<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAmPmInTitle;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNoTitle;
use PlusTimeIT\EasyForms\Traits\Transformable;

class TimePickerField extends EasyField
{
    use HasAmPmInTitle;
    use HasMultiple;
    use HasNoTitle;
    use Transformable;

    protected $component = 'time-picker';

    protected $discriminator = 'TimePickerField';

    protected $type = 'time-picker';
}
