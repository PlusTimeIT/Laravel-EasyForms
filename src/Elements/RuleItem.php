<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class RuleItem
{
    public function __construct(string $name  = '' , $value = '')
    {
        return $this->setName($name)->setValue($value);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public static function make()
    {
        return new static();
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
