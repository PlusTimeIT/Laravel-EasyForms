<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMessages
{
    protected $messages = [];

    public function getMessages(): array|string
    {
        return $this->messages;
    }

    public function setMessages(array|string $messages): self
    {
        $this->messages = $messages;

        return $this;
    }
}
