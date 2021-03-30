<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;
use PlusTimeIT\EasyForms\Traits\InputFormTrait;

abstract class InputForm extends EasyForm implements InputFormInterface
{
    public function __construct()
    {
        $this
            ->setFields($this->fields())
            ->setAlerts($this->alerts())
            ->setAxios($this->axios())
            ->setButtons($this->buttons());
    }

    protected $alerts = [];

    protected $axios;

    protected $buttons = [];

    protected $fields = [];

    use InputFormTrait;
}
