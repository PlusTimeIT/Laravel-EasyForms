<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\ButtonVariantTypes;

trait HasButtonVariant
{
    protected ButtonVariantTypes $variant = ButtonVariantTypes::Flat;

    public function getVariant(): ButtonVariantTypes
    {
        return $this->variant;
    }

    public function setVariant(ButtonVariantTypes $variant): static
    {
        $this->variant = $variant;

        return $this;
    }
}
