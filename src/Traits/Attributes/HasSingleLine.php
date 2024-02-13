<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSingleLine
{
    protected bool $single_line = false;

    public function getSingleLine(): bool
    {
        return $this->single_line;
    }

    public function setSingleLine(bool $single_line): static
    {
        $this->single_line = $single_line;

        return $this;
    }
}
