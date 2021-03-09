<?php
namespace PlusTimeIT\EasyForms\Base;

use Log;
use PlusTimeIT\EasyForms\Traits\InputFormTrait;
use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;

class InputForm extends EasyForm implements InputFormInterface
{
    protected $action = '';
    
    use InputFormTrait;
}
