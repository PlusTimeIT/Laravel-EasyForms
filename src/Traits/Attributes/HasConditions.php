<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasConditions
{
    protected array $conditions;

    public function getConditions(): array
    {
        return $this->conditions;
    }

    public function setConditions(array $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }
}
