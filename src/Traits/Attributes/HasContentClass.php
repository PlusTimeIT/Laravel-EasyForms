<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasContentClass
{
    protected string $content_class;

    public function getContentClass(): mixed
    {
        return $this->content_class;
    }

    public function setContentClass(mixed $content_class): static
    {
        $this->content_class = $content_class;

        return $this;
    }
}
