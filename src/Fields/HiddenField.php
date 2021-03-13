<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class HiddenField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    protected $component = 'v-text-field';

    protected $component_type = self::TYPE;

    protected $type = self::TYPE;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'hidden';
}
