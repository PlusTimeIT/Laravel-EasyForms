<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\ConvertTraits;

class FileInputField extends EasyField
{
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        return $this->fillOptions($options);
    }

    public function getAccept()
    {
        return $this->accept;
    }

    public function setAccept(string $accept): self
    {
        $this->accept = $accept;
        return $this;
    }

    protected $accept = '';

    protected $component = 'v-file-input';

    protected $type = self::TYPE;

    protected $value = [];

    use ConvertTraits;

    public const TYPE = 'file-input';
}
