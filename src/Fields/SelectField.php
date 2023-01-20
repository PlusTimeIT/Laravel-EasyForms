<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAnyField, HasChips, HasItemId, HasItemText, HasItemValue, HasItems, HasLoadable, HasMultiple};
use PlusTimeIT\EasyForms\Traits\Transformable;

class SelectField extends EasyField
{
    use HasAnyField;
    use HasChips;
    use HasItemId;
    use HasItems;
    use HasItemText;
    use HasItemValue;
    use HasLoadable;
    use HasMultiple;
    use Transformable;

    protected $component = 'v-select';

    protected $type = 'select';

    public function addItem(SelectItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }
}
