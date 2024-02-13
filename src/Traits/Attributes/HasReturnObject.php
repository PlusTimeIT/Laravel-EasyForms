<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasReturnObject
{
    protected bool $return_object = false;

    public function getReturnObject(): bool
    {
        return $this->return_object;
    }

    public function setReturnObject(bool $return_object): static
    {
        $this->return_object = $return_object;

        return $this;
    }
}
