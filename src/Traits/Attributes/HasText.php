<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasText
{
    protected string $text;

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }
}
