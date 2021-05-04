<?php

namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;
use PlusTimeIT\EasyForms\Traits\Transformable;
use PlusTimeIT\Traits\Attributes\HasMultiple;

class DatePickerField extends EasyField implements FieldInterface
{
    use FieldTrait;
    use Transformable;
    use HasMultiple;

    public const TYPE = 'date-picker';

    protected $close_on_content_click = true;

    protected $component = 'date-picker';

    protected $controls = false;

    protected $value = '';

    public function __construct()
    {
        return $this;
    }

    public function getCloseOnContentClick(): bool
    {
        return $this->close_on_content_click;
    }

    public function getControls(): bool
    {
        return $this->controls;
    }

    public function setCloseOnContentClick(bool $close_on_content_click): self
    {
        $this->close_on_content_click = $close_on_content_click;

        return $this;
    }

    public function setControls(bool $controls): self
    {
        $this->controls = $controls;

        return $this;
    }
}
