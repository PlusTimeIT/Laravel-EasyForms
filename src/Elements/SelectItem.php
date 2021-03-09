<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\{ToArrayTrait, ToJsonTrait};

class SelectItem
{
    public function __construct($id, $value)
    {
        $this->id = $id;
        $this->value = $value;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValue()
    {
        return $this->value;
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

    use ToArrayTrait;
    use ToJsonTrait;
}
