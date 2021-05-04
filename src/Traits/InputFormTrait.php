<?php
namespace PlusTimeIT\EasyForms\Traits;


trait InputFormTrait
{

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;
        return $this;
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
