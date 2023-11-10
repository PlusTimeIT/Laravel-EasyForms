<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\InputFormInterface;
use PlusTimeIT\EasyForms\Traits\InputFormTrait;

/**
 * Handles Input Forms with fields and buttons
 */
abstract class InputForm extends EasyForm implements InputFormInterface
{
    use InputFormTrait;

    /**
     * @var string The type of form
     */
    protected string $type = 'input-form';

    public function __construct()
    {
        parent::__construct();

        return $this
            ->setFields($this->fields())
            ->setButtons($this->buttons());
    }

    public function populateFields($data = null): InputForm
    {
        return $this->setFields(
            collect($this->fields())->map(function ($field) use ($data) {
                if (isset($data[$field->getName()])) {
                    $field->setValue($data[$field->getName()]);
                }

                return $field;
            }

            )->toArray()
        );
    }
}
