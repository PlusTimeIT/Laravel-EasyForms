<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCallback
{
    protected $callback;

    public function getCallback(): string
    {
        return $this->callback;
    }

    public function setCallback(string $callback): self
    {
        $this->callback = $callback;
        return $this;
    }
}
