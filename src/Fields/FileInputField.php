<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class FileInputField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    public function getAccept(): string
    {
        return $this->accept;
    }

    public function getCounter(): bool
    {
        return $this->counter;
    }

    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    public function getPrependIcon(): string
    {
        return $this->prepend_icon;
    }

    public function getShowSize(): bool
    {
        return $this->show_size;
    }

    public function setAccept(bool $counter): self
    {
        $this->counter = $counter;
        return $this;
    }

    public function setCounter(string $accept): self
    {
        $this->accept = $accept;
        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;
        return $this;
    }

    public function setPrependIcon(string $prepend_icon): self
    {
        $this->prepend_icon = $prepend_icon;
        return $this;
    }

    public function setShowSize(bool $show_size): self
    {
        $this->show_size = $show_size;
        return $this;
    }

    protected $component = 'v-file-input';

    protected $counter = FALSE;

    protected $multiple = FALSE;

    protected $prepend_icon = 'mdi-paperclip';

    protected $show_size = FALSE;

    protected $type = self::TYPE;

    protected $value = [];

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'file-input';
}
