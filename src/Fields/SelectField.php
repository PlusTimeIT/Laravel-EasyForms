<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class SelectField extends EasyField
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        foreach ($options as $key => $value) {
            if ( ! property_exists(__CLASS__, $key)) {
                continue;
            }
            $this->{$key} = $value;
        }
        return $this;
    }

    public function addItem(SelectItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function getItemId()
    {
        return $this->item_text;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemValue(): string
    {
        return $this->item_value;
    }

    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    public function setItemId($id): self
    {
        $this->item_text = $id;
        return $this;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    public function setItemValue(string $value): self
    {
        $this->item_value = $value;
        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;
        return $this;
    }

    protected $component = 'v-select';

    protected $item_text = 'value';

    protected $item_value = 'id';

    protected $items = [];

    protected $multiple = FALSE;

    protected $type = self::TYPE;

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'select';
}
