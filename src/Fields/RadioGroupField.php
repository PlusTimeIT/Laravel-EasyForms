<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Traits\Attributes\HasInline;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Transformable;

/**
 * Represents a radio group field in a form.
 *
 * @extends EasyField
 */
class RadioGroupField extends EasyField
{
    use HasInline;
    use HasItems;
    use Transformable;

    protected string $component = 'v-radio-group';

    protected string $discriminator = 'RadioGroupField';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(RadioItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
