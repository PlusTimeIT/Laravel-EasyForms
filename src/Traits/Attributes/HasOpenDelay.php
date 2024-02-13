<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOpenDelay
{
    protected string|int $open_delay;

    public function getOpenDelay(): string|int
    {
        return $this->open_delay;
    }

    public function setOpenDelay(string|int $open_delay): static
    {
        $this->open_delay = $open_delay;

        return $this;
    }
}
