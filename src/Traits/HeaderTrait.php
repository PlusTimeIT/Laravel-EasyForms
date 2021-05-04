<?php
namespace PlusTimeIT\EasyForms\Traits;

trait HeaderTrait
{
    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    protected $key;

    protected $value;

    use Transformable;
}
