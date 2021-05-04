<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxField extends EasyField
{
    use Transformable;

    public const TYPE = 'checkbox';

    protected $component = 'v-checkbox';

    protected $type = self::TYPE;
}
