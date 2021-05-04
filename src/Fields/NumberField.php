<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasMinMax, HasStep};
use PlusTimeIT\EasyForms\Traits\Transformable;

class NumberField extends EasyField
{
    use HasMinMax;
    use HasStep;
    use Transformable;

    public const TYPE = 'number';

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;
}
