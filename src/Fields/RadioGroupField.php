<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\Attributes\HasAnyField;
use PlusTimeIT\EasyForms\Traits\Attributes\HasChips;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemId;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItems;
use PlusTimeIT\EasyForms\Traits\Attributes\HasItemValue;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMandatory;
use PlusTimeIT\EasyForms\Traits\Attributes\HasMultiple;
use PlusTimeIT\EasyForms\Traits\Attributes\HasRowColumnLayout;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;

class RadioGroupField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasChips;
    use HasMultiple;
    use HasItemId;
    use HasItems;
    use HasAnyField;
    use HasItemValue;
    use HasMandatory;
    use HasRowColumnLayout;

    public const TYPE = 'select';

    protected $component = 'v-radio-group';

    protected $type = self::TYPE;

    /**
     * Override trait so that we can cast this item.
     */
    public function addItem(RadioItem $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}
