<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class NumberField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    public function getMax()
    {
        return $this->max;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMax(int $max): self
    {
        $this->max = $max;
        return $this;
    }

    public function setMin(int $max): self
    {
        $this->max = $max;
        return $this;
    }

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $max = 99999;

    protected $min = 0;

    protected $type = self::TYPE;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'number';
}
