<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasClosableChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCloseText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCounter;
use PlusTimeIT\EasyForms\Traits\Attributes\HasDirection;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideNoData;
use PlusTimeIT\EasyForms\Traits\Attributes\HasHideSelected;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemChildren;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemColor;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemProps;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemTitle;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemValue;
use PlusTimeIT\EasyForms\Traits\Attributes\HasLoadable;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMenu;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMenuIcon;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasNoDataText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasOpenOnClear;
use PlusTimeIT\EasyForms\Traits\Attributes\HasOpenText;
use PlusTimeIT\EasyForms\Traits\Attributes\HasReturnObject;
use PlusTimeIT\EasyForms\Traits\Attributes\HasReverse;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSearch;
use PlusTimeIT\EasyForms\Traits\Attributes\HasTransition;
use PlusTimeIT\EasyForms\Traits\Creatable;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a select field in a form.
 *
 * @extends EasyField
 */
class SelectField extends EasyField
{
    use Creatable;
    use HasAnyField;
    use HasChips;
    use HasClosableChips;
    use HasCloseText;
    use HasCounter;
    use HasDirection;
    use HasHideNoData;
    use HasHideSelected;
    use HasItemChildren;
    use HasItemColor;
    use HasItemId;
    use HasItemProps;
    use HasItems;
    use HasItemTitle;
    use HasItemValue;
    use HasLoadable;
    use HasMenu;
    use HasMenuIcon;
    use HasMultiple;
    use HasNoDataText;
    use HasOpenOnClear;
    use HasOpenText;
    use HasReturnObject;
    use HasReverse;
    use HasSearch;
    use HasTransition;
    use Transformable;

    protected string $component = 'v-select';

    protected string $discriminator = 'SelectField';

    protected string $type = 'select';

    public function addItem(SelectItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
