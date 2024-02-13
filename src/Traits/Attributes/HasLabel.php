<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLabel
{
    protected string $label = '';

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }
}
