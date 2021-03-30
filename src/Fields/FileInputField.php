<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

// File input Accept values
// image/*, video/*, audio/*, .doc,.pdf etc.
//
// Specifying mime types
// image/jpeg,image/png,application/msword,application/pdf
//
//

class FileInputField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
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

    public static function make()
    {
        return new static();
    }

    public function setAccept(string $accept): self
    {
        $this->accept = $accept;
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

    protected $accept = '*';

    protected $component = 'v-file-input';

    protected $counter = FALSE;

    protected $multiple = FALSE;

    protected $prepend_icon = 'mdi-paperclip';

    protected $show_size = FALSE;

    protected $type = self::TYPE;

    protected $value = [];

    use FieldTrait;

    use Transformable;

    public const TYPE = 'file-input';
}
