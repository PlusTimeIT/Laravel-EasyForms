<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;
use PlusTimeIT\EasyForms\Traits\{FormTrait, InputFormTrait};

abstract class InputForm extends EasyForm implements InputFormInterface
{
    protected $action = '';

    use InputFormTrait;
    use FormTrait;
}
