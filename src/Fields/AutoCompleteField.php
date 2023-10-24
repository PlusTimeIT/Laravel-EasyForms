<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemValue;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLoadable;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

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
