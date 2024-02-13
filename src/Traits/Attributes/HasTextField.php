<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Fields\TextField;

trait HasTextField
{
    protected ?TextField $textfield;

    public function getTextfield(): ?TextField
    {
        return $this->textfield;
    }

    public function setTextfield(TextField $textfield): static
    {
        $this->textfield = $textfield;

        return $this;
    }
}
