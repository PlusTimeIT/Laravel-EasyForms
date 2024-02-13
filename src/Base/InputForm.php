<?php

namespace PlusTimeIT\EasyForms\Base;

/**
 * Handles Input Forms with fields and buttons
 */
abstract class InputForm extends EasyForm implements \PlusTimeIT\EasyForms\Interfaces\InputFormInterface
{
    use \PlusTimeIT\EasyForms\Traits\InputFormTrait;

    /**
     * @var string The type of form
     */
    protected string $type = 'input-form';

    public function __construct()
    {
        parent::__construct();

        return $this
            ->setButtons($this->buttons())
            ->setFields($this->fields());
    }

    public function populateFields($data = null): InputForm
    {
        return $this->setFields(
            collect($this->fields())->map(
                function ($field) use ($data) {
                    if (isset($data[$field->getName()])) {
                        $field->setValue($data[$field->getName()]);
                    }

                    return $field;
                }
            )->toArray()
        );
    }
}
