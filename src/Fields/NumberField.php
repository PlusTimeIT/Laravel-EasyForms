<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class NumberField extends EasyField
{
    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $max = 99999;

    protected $min = 0;

    protected $type = self::TYPE;

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'number';
}
