<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOutlined
{
    protected $outlined = true;

    public function getOutlined(): bool
    {
        return $this->outlined;
    }

    public function setOutlined(bool $outlined): self
    {
        $this->outlined = $outlined;

        return $this;
    }
}
