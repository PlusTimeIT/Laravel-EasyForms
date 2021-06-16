<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAnyField, HasChips, HasItemId, HasItemValue, HasItems, HasMandatory, HasMultiple, HasRowColumnLayout};
use PlusTimeIT\EasyForms\Traits\Transformable;

class RadioGroupField extends EasyField
{
    use HasAnyField;
    use HasChips;
    use HasItems;
    use HasMandatory;
    use HasRowColumnLayout;
    use Transformable;

    protected $component = 'v-radio-group';

    protected $type = 'select';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(RadioItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
