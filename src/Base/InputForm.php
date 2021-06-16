<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;
use PlusTimeIT\EasyForms\Traits\InputFormTrait;

abstract class InputForm extends EasyForm implements InputFormInterface
{
    use InputFormTrait;

    protected $type = 'input';

    public function __construct()
    {
        parent::__construct();
        $this
            ->setFields($this->fields())
            ->setButtons($this->buttons());
    }
}
