<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class TextField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    public function getCounter(): bool
    {
        return $this->counter;
    }

    public function getMaxLength(): int
    {
        return $this->maxlength;
    }

    public function setCounter(bool $counter): self
    {
        $this->counter = $counter;
        return $this;
    }

    public function setMaxLength(int $maxlength): self
    {
        $this->maxlength = $maxlength;
        return $this;
    }

    protected $component = 'v-text-field';

    protected $counter = FALSE;

    protected $maxlength;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'text';
}
