<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseDelay
{
    protected string|int $close_delay = 250;

    public function getCloseDelay(): string|int
    {
        return $this->close_delay;
    }

    public function setCloseDelay(string|int $close_delay): static
    {
        $this->close_delay = $close_delay;

        return $this;
    }
}
