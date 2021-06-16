<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasId,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class SelectItem
{
    use HasId;
    use HasValue;
    use Transformable;

    protected $value;

    public function __construct($id = '', $value = '')
    {
        return $this->setId($id)->setValue($value);
    }

    public static function make()
    {
        return new static();
    }
}
