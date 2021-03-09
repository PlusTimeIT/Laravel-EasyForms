<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class HiddenField extends EasyField
{
    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'hidden';
}
