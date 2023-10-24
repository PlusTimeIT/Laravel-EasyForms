<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRows;
use PlusTimeIT\EasyForms\Traits\Transformable;

class TextareaField extends EasyField
{
    use HasCounter;
    use HasRows;
    use Transformable;

    protected $component = 'v-textarea';

    protected $type = 'textarea';
}
