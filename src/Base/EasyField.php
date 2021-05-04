<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FieldInterface;
use PlusTimeIT\EasyForms\Traits\FieldTrait;

class EasyField implements FieldInterface
{
    use FieldTrait;

    public static function make()
    {
        return new static();
    }
}
