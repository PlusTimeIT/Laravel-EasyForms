<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class SelectItem
{
    public function __construct($id = '', $value = '')
    {
        return $this->setId($id)->setValue($value);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValue()
    {
        return $this->value;
    }

    public static function make()
    {
        return new static();
    }

    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    protected $id;

    protected $value;

    use Transformable;
}
