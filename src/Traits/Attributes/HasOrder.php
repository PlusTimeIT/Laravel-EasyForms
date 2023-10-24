<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOrder
{
    protected $order = 0;

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;

        return $this;
    }
}
