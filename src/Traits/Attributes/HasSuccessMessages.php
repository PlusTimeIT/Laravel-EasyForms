<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuccessMessages
{
    protected array $success_messages = [];

    public function getSuccessMessages(): array|string
    {
        return $this->success_messages;
    }

    public function setSuccessMessages(array|string $success_messages): static
    {
        $this->success_messages = $success_messages;

        return $this;
    }
}
