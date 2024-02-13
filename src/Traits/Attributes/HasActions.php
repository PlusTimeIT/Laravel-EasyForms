<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActions
{
    protected array $actions = [];

    public function actions(): array
    {
        return $this->actions;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function setActions(array $actions): static
    {
        $this->actions = $actions;

        return $this;
    }
}
