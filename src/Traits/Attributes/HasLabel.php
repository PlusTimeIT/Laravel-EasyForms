<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLabel
{
    protected $label = '';

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
