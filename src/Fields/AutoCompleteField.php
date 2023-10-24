<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAnyField, HasChips, HasItemId, HasItemText, HasItemValue, HasItems, HasLoadable, HasMultiple};
use PlusTimeIT\EasyForms\Traits\{Creatable, Transformable};

class AutoCompleteField extends EasyField
{
    use Creatable;
    use HasAnyField;
    use HasChips;
    use HasItemId;
    use HasItems;
    use HasItemText;
    use HasItemValue;
    use HasLoadable;
    use HasMultiple;
    use Transformable;

    protected $component = 'v-autocomplete';

    protected $discriminator = 'AutoCompleteField';

    protected $type = 'autocomplete';
}
