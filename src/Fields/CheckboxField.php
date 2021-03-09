<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class CheckboxField extends EasyField
{
    protected $component = 'v-checkbox';

    protected $type = self::TYPE;

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'checkbox';
}
