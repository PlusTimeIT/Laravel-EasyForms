<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;
use PlusTimeIT\EasyForms\Traits\InputFormTrait;

/**
 * Create a user input form with fields and single set of buttons.
 */

abstract class InputForm extends EasyForm implements InputFormInterface
{
    use InputFormTrait;

    /**
     * @var string $type The type of form
     */
    protected $type = 'input-form';

    public function __construct()
    {
        parent::__construct();
        return $this
            ->setFields($this->fields())
            ->setButtons($this->buttons());
    }
}
