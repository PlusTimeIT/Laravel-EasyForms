<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class ConditionItem
{
    public function __construct($check = '', $operator = '' ,  $against = '')
    {
        return $this->setCheck($check)->setOperator($operator)->setAgainst($against);
    }

    public function getCheck()
    {
        return $this->check;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function getAgainst()
    {
        return $this->against;
    }

    public static function make($check = '', $operator = '' ,  $against = '')
    {
        return new static($check, $operator,  $against );
    }

    public function setCheck($check): self
    {
        $this->check = $check;
        return $this;
    }

    public function setOperator($operator): self
    {
        $this->operator = $operator;
        return $this;
    }

    public function setAgainst($against): self
    {
        $this->against = $against;
        return $this;
    }

    protected $check;

    protected $operator;

    protected $against;

    use Transformable;
}
