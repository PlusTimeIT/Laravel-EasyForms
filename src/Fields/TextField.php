<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class TextField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasCounter;
    use HasMaxLength;

    public const TYPE = 'text';

    protected $component = 'v-text-field';

    protected $maxlength;
}
