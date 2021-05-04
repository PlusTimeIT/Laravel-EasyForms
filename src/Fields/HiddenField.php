<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class HiddenField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;

    public const TYPE = 'hidden';

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;

    public function __construct()
    {
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
