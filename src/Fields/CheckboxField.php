<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;

    public const TYPE = 'checkbox';
    protected $component = 'v-checkbox';

    protected $type = self::TYPE;
}
