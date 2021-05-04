<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemValue;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;

class SelectField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasMultiple;
    use HasChips;
    use HasAnyField;
    use HasItems;
    use HasItemId;
    use HasItemText;
    use HasItemValue;

    public const TYPE = 'select';

    protected $component = 'v-select';

    protected $type = self::TYPE;
}
