<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class TextareaField extends EasyField
{
    protected $component = 'v-textarea';

    protected $rows = 5;

    protected $type = self::TYPE;

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'textarea';
}
