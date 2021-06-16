<?php
namespace PlusTimeIT\EasyForms\Fields;

use PlusTimeIT\EasyForms\Base\EasyField;
use PlusTimeIT\EasyForms\Traits\Transformable;

class CheckboxField extends EasyField
{
    use Transformable;

    protected $component = 'v-checkbox';

    protected $type = 'checkbox';
}
