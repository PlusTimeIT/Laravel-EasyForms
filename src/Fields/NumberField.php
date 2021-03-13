<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\ConvertTraits;

class NumberField extends EasyField
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->fillOptions($options);
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

    use ConvertTraits;

    public const TYPE = 'number';
}
