<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\TextVariantTypes;

trait HasVariant
{
    protected TextVariantTypes $variant = TextVariantTypes::Filled;

    public function getVariant(): TextVariantTypes
    {
        return $this->variant;
    }

    public function setVariant(TextVariantTypes $variant): static
    {
        $this->variant = $variant;

        return $this;
    }
}
