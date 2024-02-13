<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowIf
{
    protected bool $show_if;

    protected string $show_if_parent;

    protected mixed $show_if_value;

    public function getShowIf(): array
    {
        return ['parent' => $this->show_if_parent, 'value' => $this->show_if_value];
    }

    public function setShowIf(string $parent, mixed $value): static
    {
        $this->show_if = true;
        $this->show_if_parent = $parent;
        $this->show_if_value = $value;

        return $this;
    }

    public function showIf(string $parent, mixed $value): static
    {
        $this->show_if = true;
        $this->show_if_parent = $parent;
        $this->show_if_value = $value;

        return $this;
    }
}
