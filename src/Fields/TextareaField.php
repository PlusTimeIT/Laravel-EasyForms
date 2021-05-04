<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRows;
use PlusTimeIT\EasyForms\Traits\Transformable;

class TextareaField extends EasyField
{
    use HasRows;
    use Transformable;

    public const TYPE = 'textarea';

    protected $component = 'v-textarea';

    protected $type = self::TYPE;
}
