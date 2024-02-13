<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPickerBorder
{
    protected bool $border = false;

    public function border(): string|int|bool
    {
        return $this->border;
    }

    public function getBorder(): string|int|bool
    {
        return $this->border;
    }

    public function setBorder(string|int|bool $border): static
    {
        $this->border = $border;

        return $this;
    }
}
