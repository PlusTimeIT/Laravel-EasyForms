<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Fields\TextField;

trait HasTextField
{
    protected $textfield;

    public function getTextfield(): TextField
    {
        return $this->textfield;
    }

    public function setTextfield(TextField $textfield): self
    {
        $this->textfield = $textfield;

        return $this;
    }
}
