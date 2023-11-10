<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTitle
{
    protected string $title = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
