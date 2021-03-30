<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class MaskItem
{
    public function __construct($name, $value = NULL)
    {
        $this->name = $name;
        $this->value = $value;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    protected $name;

    protected $value;

    use Transformable;
}
