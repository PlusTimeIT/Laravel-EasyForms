<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\CheckboxItem;
use PlusTimeIT\EasyForms\Traits\Attributes\HasCheckboxItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasSwitch;
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxGroupField extends EasyField
{
    use HasCheckboxItems;
    use HasSwitch;
    use Transformable;

    protected $component = 'lvef-checkbox-group';

    protected $discriminator = 'CheckboxGroupField';

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
