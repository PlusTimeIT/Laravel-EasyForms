<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasFields
{
    protected $fields = [];

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this->sortFields();
    }

    public function sortFields(): self
    {
        $this->fields = collect($this->fields)->sortBy([fn($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();
        return $this;
    }
}
