<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMessages
{
    protected array|string $messages = [];

    public function getMessages(): array|string
    {
        return $this->messages;
    }

    public function setMessages(array|string $messages): static
    {
        $this->messages = $messages;

        return $this;
    }
}
