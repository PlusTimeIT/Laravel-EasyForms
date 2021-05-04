<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\Traits\Attributes\HasCounter;
use PlusTimeIT\Traits\Attributes\HasMultiple;

// File input Accept values
// image/*, video/*, audio/*, .doc,.pdf etc.
//
// Specifying mime types
// image/jpeg,image/png,application/msword,application/pdf
//
//

class FileInputField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasCounter;
    use HasMultiple;

    public const TYPE = 'file-input';

    protected $accept = '*';

    protected $component = 'v-file-input';

    protected $prepend_icon = 'mdi-paperclip';

    protected $show_size = false;

    protected $type = self::TYPE;

    protected $value = [];

    public function __construct()
    {
        return $this;
    }

    public function getAccept(): string
    {
        return $this->accept;
    }

    public function getPrependIcon(): string
    {
        return $this->prepend_icon;
    }

    public function getShowSize(): bool
    {
        return $this->show_size;
    }

    public function setAccept(string $accept): self
    {
        $this->accept = $accept;

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
}
