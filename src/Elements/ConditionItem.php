<?php

namespace PlusTimeIT\EasyForms\Elements;

/**
 * Condition Item to provide an easy way to check against conditionals for Action Icons and Buttons
 *
 * The data provided comes from the forms additional data
 */
class ConditionItem
{
    use \PlusTimeIT\EasyForms\Traits\Creatable;
    use \PlusTimeIT\EasyForms\Traits\Transformable;

    protected string $against;

    protected string $check;

    protected string $operator;

    protected string $source;

    public function getAgainst(): string
    {
        return $this->against;
    }

    public function getCheck(): string
    {
        return $this->check;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setAgainst($against): static
    {
        $this->against = $against;

        return $this;
    }

    public function setCheck($check): static
    {
        $this->check = $check;

        return $this;
    }

    public function setOperator($operator): static
    {
        $this->operator = $operator;

        return $this;
    }
}
