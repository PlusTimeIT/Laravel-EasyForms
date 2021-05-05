<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

abstract class EasyForm implements FormInterface
{
    use FormTrait;

    public function __construct()
    {
        $this
            ->setAlerts($this->alerts())
            ->setAxios($this->axios());
    }
}
