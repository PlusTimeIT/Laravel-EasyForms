<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Attributes\{
    HasName,
    HasValue
};
use PlusTimeIT\EasyForms\Traits\Transformable;

class RuleItem
{
    use HasName;
    use HasValue;
    use Transformable;

    public function __construct(string $name = '', $value = '')
    {
        return $this->setName($name)->setValue($value);
    }

    public static function make()
    {
        return new static();
    }
}
