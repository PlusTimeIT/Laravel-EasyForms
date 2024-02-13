<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDataAction
{
    protected string $data_action = 'process-form';

    public function getDataAction(): string
    {
        return $this->data_action;
    }

    public function setDataAction(string $data_action): static
    {
        $this->data_action = $data_action;

        return $this;
    }
}
