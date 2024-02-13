<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOrder
{
    protected int $order = 0;

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): static
    {
        $this->order = $order;

        return $this;
    }
}
