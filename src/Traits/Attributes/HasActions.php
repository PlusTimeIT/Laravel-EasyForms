<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasActions
{
    protected $actions = [];

    public function actions(): array
    {
        return $this->actions;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function setActions(array $actions): self
    {
        $this->actions = $actions;
        return $this;
    }
}
