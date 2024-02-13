<?php

namespace PlusTimeIT\EasyForms\Fields;

/**
 * Represents a group of checkboxes in a form.
 *
 * @extends \PlusTimeIT\EasyForms\Base\EasyField
 */
class CheckboxGroupField extends \PlusTimeIT\EasyForms\Base\EasyField
{
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasCheckboxItems;
    use \PlusTimeIT\EasyForms\Traits\Attributes\HasSwitch;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $component = 'lvef-checkbox-group';

    protected string $discriminator = 'CheckboxGroupField';

    protected string $type = 'checkbox-group';

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(\PlusTimeIT\EasyForms\Elements\CheckboxItem $item): static
    {
        $this->items[] = $item;

        return $this;
    }
}
