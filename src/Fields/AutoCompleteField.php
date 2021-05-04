<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAnyField, HasChips, HasItemId, HasItemText, HasItemValue, HasItems, HasMultiple};
use PlusTimeIT\EasyForms\Traits\Transformable;

class AutoCompleteField extends EasyField
{
    use HasAnyField;
    use HasChips;
    use HasItemId;
    use HasItems;
    use HasItemText;
    use HasItemValue;
    use HasMultiple;
    use Transformable;

    public const TYPE = 'autocomplete';

    protected $component = 'v-autocomplete';

    protected $type = self::TYPE;
}
