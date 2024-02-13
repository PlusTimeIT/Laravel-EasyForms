<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\FormLoaderTypes;

trait HasFormLoaderType
{
    protected FormLoaderTypes $type = FormLoaderTypes::Circular;

    public function getType(): FormLoaderTypes
    {
        return $this->type;
    }

    public function setType(FormLoaderTypes $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function type(): FormLoaderTypes
    {
        return $this->type;
    }
}
