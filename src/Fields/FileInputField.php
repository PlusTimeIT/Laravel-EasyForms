<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class FileInputField extends EasyField
{
    public function getAccept()
    {
        return $this->accept;
    }

    public function setAccept(string $accept): string
    {
        $this->accept = $accept;
        return $this;
    }

    protected $accept = '';

    protected $component = 'v-file-input';

    protected $type = self::TYPE;

    protected $value = [];

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'file-input';
}
