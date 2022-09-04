<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\CheckboxItem;
use PlusTimeIT\EasyForms\Traits\Attributes\{HasAnyField, HasCheckboxItems, HasChips, HasItemId, HasItemValue, HasMandatory, HasMultiple, HasRowColumnLayout, HasSwitch};
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxGroupField extends EasyField
{
    use HasAnyField;
    use HasCheckboxItems;
    use HasMandatory;
    use HasSwitch;
    use Transformable;

    protected $component = 'lvef-checkbox-group';

    protected $type = 'checkbox-group';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(CheckboxItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
