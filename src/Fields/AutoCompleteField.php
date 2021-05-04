<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\Traits\Attributes\HasAnyField;
use PlusTimeIT\Traits\Attributes\HasChips;
use PlusTimeIT\Traits\Attributes\HasItemId;
use PlusTimeIT\Traits\Attributes\HasItems;
use PlusTimeIT\Traits\Attributes\HasItemText;
use PlusTimeIT\Traits\Attributes\HasItemValue;
use PlusTimeIT\Traits\Attributes\HasMultiple;

class AutoCompleteField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasMultiple;
    use HasChips;
    use HasAnyField;
    use HasItems;
    use HasItemId;
    use HasItemValue;
    use HasItemText;

    public const TYPE = 'autocomplete';

    protected $component = 'v-autocomplete';

    protected $type = self::TYPE;
}
