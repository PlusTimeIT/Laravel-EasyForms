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

    public function getMax(): float
    {
        return $this->max;
    }

    public function getMin(): float
    {
        return $this->min;
    }

    public function getStep(): float
    {
        return $this->step;
    }

    public function setMax(float $max): self
    {
        $this->max = $max;
        return $this;
    }

    public function setMin(float $max): self
    {
        $this->max = $max;
        return $this;
    }

    public function setStep(float $step): self
    {
        $this->step = $step;
        return $this;
    }

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $max = 99999;

    protected $min = 0;

    protected $step = 1;

    protected $type = self::TYPE;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'number';
}
