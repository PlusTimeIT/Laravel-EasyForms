<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{FieldTrait, Transformable};

class DatePickerField extends EasyField implements FieldInterface
{
    public function __construct()
    {
        return $this;
    }

    public function getCloseOnContentClick(): bool
    {
        return $this->closeOnContentClick;
    }

    public function getControls(): bool
    {
        return $this->controls;
    }

    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    public static function make()
    {
        return new static();
    }

    public function setCloseOnContentClick(bool $closeOnContentClick): self
    {
        $this->closeOnContentClick = $closeOnContentClick;
        return $this;
    }

    public function setControls(bool $controls): self
    {
        $this->controls = $controls;
        return $this;
    }

    public function setMultiple(bool $multiple): self
    {
        $this->multiple = $multiple;
        return $this;
    }

    protected $closeOnContentClick = TRUE;

    protected $component = 'date-picker';

    protected $controls = FALSE;

    protected $multiple = FALSE;

    protected $value = [];

    use FieldTrait;

    use Transformable;

    public const TYPE = 'date-picker';
}
