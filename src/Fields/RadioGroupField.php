<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class RadioGroupField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
    }

    public function addItem(RadioItem $item): self
    {
        $this->items[] = $item;
        return $this;
    }

    public static function make()
    {
        return new static();
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

    public function setColumn(bool $column): self
    {
        $this->column = $column;
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

    public function setMandatory(bool $mandatory): self
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;
        return $this;
    }

    public function setRow(bool $row): self
    {
        $this->row = $row;
        return $this;
    }

    protected $any_field = FALSE;

    protected $chips = FALSE;

    protected $column = TRUE;

    protected $component = 'v-radio-group';

    protected $items = [];

    protected $mandatory = TRUE;

    protected $row = FALSE;

    protected $type = self::TYPE;

    use FieldTrait;

    use Transformable;

    public const TYPE = 'select';
}
