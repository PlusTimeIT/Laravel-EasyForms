<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMandatory;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRowColumnLayout;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a radio group field in a form.
 *
 * @extends EasyField
 */
class RadioGroupField extends EasyField
{
    use HasAnyField;
    use HasChips;
    use HasItems;
    use HasMandatory;
    use HasMultiple;
    use HasRowColumnLayout;
    use Transformable;

    protected string $component = 'v-radio-group';

    protected string $discriminator = 'RadioGroupField';

    protected string $type = 'select';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(RadioItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
