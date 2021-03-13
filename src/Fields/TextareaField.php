<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\ConvertTraits;

class TextareaField extends EasyField
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->fillOptions($options);
    }

    protected $component = 'v-textarea';

    protected $rows = 5;

    protected $type = self::TYPE;

    use ConvertTraits;

    public const TYPE = 'textarea';
}
