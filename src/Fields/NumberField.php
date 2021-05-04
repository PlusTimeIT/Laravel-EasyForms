<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMinMax;
use PlusTimeIT\EasyForms\Traits\Attributes\HasStep;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class NumberField extends EasyField implements FieldInterface
{
    use Transformable;
    use FieldTrait;
    use HasStep;
    use HasMinMax;

    public const TYPE = 'number';

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;

    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;

        return $this->setOptions($options);
    }
}
