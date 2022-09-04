<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasErrorMessages
{
    protected $error_messages = [];

    public function getErrorMessages(): array | string
    {
        return $this->error_messages;
    }

    public function setErrorMessages(array | string $error_messages): self
    {
        $this->error_messages = $error_messages;

        return $this;
    }
}
