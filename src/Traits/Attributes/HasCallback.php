<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCallback
{
    protected string $callback;

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function setCallback(string $callback): static
    {
        $this->callback = $callback;

        return $this;
    }
}
