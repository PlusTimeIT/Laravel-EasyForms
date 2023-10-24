<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

/**
 * Base form class.
 */
abstract class EasyForm implements FormInterface
{
    use FormTrait;

    public function __construct()
    {
        return $this
            ->setAlerts($this->alerts())
            ->setAxios($this->axios());
    }
}
