<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\{ConvertTrait, FieldTrait};

class TextareaField extends EasyField implements FieldInterface
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->setOptions($options);
    }

    protected $component = 'v-textarea';

    protected $rows = 5;

    protected $type = self::TYPE;

    use ConvertTrait;
    use FieldTrait;

    public const TYPE = 'textarea';
}
