<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseDelay
{
    protected $close_delay;

    public function getCloseDelay(): string|int
    {
        return $this->close_delay;
    }

    public function setCloseDelay(string|int $close_delay): self
    {
        $this->close_delay = $close_delay;

        return $this;
    }
}
