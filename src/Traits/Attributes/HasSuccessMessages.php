<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSuccessMessages
{
    protected $success_messages = [];

    public function getSuccessMessages(): array | string
    {
        return $this->success_messages;
    }

    public function setSuccessMessages(array | string $success_messages): self
    {
        $this->success_messages = $success_messages;

        return $this;
    }
}