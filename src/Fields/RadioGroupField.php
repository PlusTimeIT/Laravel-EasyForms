<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a radio group field in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class RadioGroupField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasInline;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'v-radio-group';

    protected string $discriminator = 'RadioGroupField';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(\PlusTimeIT\EasyForms\Elements\RadioItem $item): static
    {
        $this->items[] = $item;

        return $this;
    }
}
