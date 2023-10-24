<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasSingleLine
{
    protected $single_line = FALSE;

    public function getSingleLine(): bool
    {
        return $this->single_line;
    }

    public function setSingleLine(bool $single_line): self
    {
        $this->single_line = $single_line;

        return $this;
    }
}
