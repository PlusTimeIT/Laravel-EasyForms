<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowIf
{
    protected $show_if;

    protected $show_if_parent;

    protected $show_if_value;

    public function getShowIf(): array
    {
        return ['parent' => $this->show_if_parent, 'value' => $this->show_if_value];
    }

    public function setShowIf(string $parent, mixed $value)
    {
        $this->show_if = TRUE;
        $this->show_if_parent = $parent;
        $this->show_if_value = $value;
        return $this;
    }

    public function showIf(string $parent, mixed $value)
    {
        $this->show_if = TRUE;
        $this->show_if_parent = $parent;
        $this->show_if_value = $value;
        return $this;
    }
}
