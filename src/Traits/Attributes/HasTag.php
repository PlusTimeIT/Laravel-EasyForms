<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTag
{
    protected string $tag = 'div';

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): static
    {
        $this->tag = $tag;

        return $this;
    }
}
