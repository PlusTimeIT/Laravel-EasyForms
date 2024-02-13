<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentPlaceholder
{
    protected string $content_placeholder = '<response-data>';

    public function getContentPlaceholder(): string
    {
        return $this->content_placeholder;
    }

    public function setContentPlaceholder(string $content_placeholder): static
    {
        $this->content_placeholder = $content_placeholder;

        return $this;
    }
}
