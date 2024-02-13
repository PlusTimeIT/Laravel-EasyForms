<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasOriginalText
{
    protected string $original_text = '';

    public function getOriginalText(): string
    {
        return $this->original_text;
    }

    public function setOriginalText(string $original_text): static
    {
        $this->original_text = $original_text;

        return $this;
    }
}
