<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOutlined
{
    protected bool $outlined = true;

    public function getOutlined(): bool
    {
        return $this->outlined;
    }

    public function setOutlined(bool $outlined): static
    {
        $this->outlined = $outlined;

        return $this;
    }
}
