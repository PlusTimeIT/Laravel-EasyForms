<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasPlaceholder
{
    protected string $placeholder = '';

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function setPlaceholder(string $placeholder): static
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
