<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMaxLength;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class PasswordField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasCounter;
    use HasMaxLength;

    public const TYPE = 'password';

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;
}
