<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasComponent
{
    protected string $component = 'v-text-field';

    protected string $component_type = '';

    public function getComponent(): string
    {
        return $this->component;
    }

    public function getComponentType(): string
    {
        return $this->component_type;
    }

    public function setComponent(string $component): self
    {
        $this->component = $component;

        return $this;
    }

    public function setComponentType(string $component_type): self
    {
        $this->component_type = $component_type;

        return $this;
    }
}
