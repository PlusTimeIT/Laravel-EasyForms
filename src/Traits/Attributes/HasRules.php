<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasRules
{
    protected array $rules = [];

    public function getRules(): array
    {
        return $this->rules;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;

        return $this;
    }
}
