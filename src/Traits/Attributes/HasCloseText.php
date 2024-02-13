<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasCloseText
{
    protected string $close_text;

    public function getCloseText(): string
    {
        return $this->close_text;
    }

    public function setCloseText(string $close_text): static
    {
        $this->close_text = $close_text;

        return $this;
    }
}
