<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFields
{
    protected array $fields = [];

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): static
    {
        $this->fields = $fields;

        return $this->sortFields();
    }

    public function sortFields(): static
    {
        $this->fields = collect($this->fields)->sortBy(fn ($field) => $field->getOrder())->values()->all();

        return $this;
    }
}
