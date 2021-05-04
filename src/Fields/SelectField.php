<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\Traits\Attributes\HasAnyField;
use PlusTimeIT\Traits\Attributes\HasChips;
use PlusTimeIT\Traits\Attributes\HasMultiple;

class SelectField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasMultiple;
    use HasChips;
    use HasAnyField;

    public const TYPE = 'select';

    protected $any_field = false;

    protected $chips = false;

    protected $component = 'v-select';

    protected $item_text = 'value';

    protected $item_value = 'id';

    protected $items = [];

    protected $type = self::TYPE;

    public function __construct()
    {
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

    public static function make()
    {
        return new static();
    }

    public function setItemText(string $text): self
    {
        $this->item_text = $text;

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
}
