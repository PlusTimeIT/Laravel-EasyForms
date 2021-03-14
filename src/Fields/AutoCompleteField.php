<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class AutoCompleteField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    public function addItem(SelectItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public function getAnyField(): bool
    {
        return $this->any_field;
    }

    public function getChips(): bool
    {
        return $this->chips;
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

    public function setAnyField(bool $any_field): self
    {
        $this->any_field = $any_field;
        return $this;
    }

    public function setChips(bool $chips): self
    {
        $this->chips = $chips;
        return $this;
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

    protected $any_field = FALSE;

    protected $chips = FALSE;

    protected $component = 'v-autocomplete';

    protected $item_text = 'value';

    protected $item_value = 'id';

    protected $items = [];

    protected $multiple = FALSE;

    protected $type = self::TYPE;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'autocomplete';
}
