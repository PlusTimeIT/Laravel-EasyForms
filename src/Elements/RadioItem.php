<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\ConvertTrait;

class RadioItem
{
    public function __construct($label, $color, $value)
    {
        $this->label = $label;
        $this->color = $color;
        $this->value = $value;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    protected $color;

    protected $label;

    protected $value;

    use ConvertTrait;
}
