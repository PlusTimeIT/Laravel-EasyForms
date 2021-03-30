<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class CheckboxField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
    }

    public static function make()
    {
        return new static();
    }

    protected $component = 'v-checkbox';

    protected $type = self::TYPE;

    use FieldTrait;

    use Transformable;

    public const TYPE = 'checkbox';
}
