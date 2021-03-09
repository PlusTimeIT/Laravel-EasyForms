<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\{toArrayTrait, toJsonTrait};

class TextField extends EasyField
{
    protected $component = 'v-text-field';

    use toArrayTrait;
    use toJsonTrait;

    public const TYPE = 'text';
}
