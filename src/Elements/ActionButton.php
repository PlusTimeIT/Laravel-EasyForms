<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class ActionButton
{
    public function __construct()
    {
        return $this;
    }

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function getButton(): Button
    {
        return $this->button;
    }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public static function make()
    {
        return new static();
    }

    public function setCallback(string $callback): self
    {
        $this->callback = $callback;
        return $this;
    }

    public function setConditions(array $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function setButton(Button $button): self
    {
        $this->button = $button;
        return $this;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;
        return $this;
    }

    protected $conditions;

    protected $callback;

    protected $button;

    protected $identifier;

    protected $name;

    protected $order = 0;

    use Transformable;
}
