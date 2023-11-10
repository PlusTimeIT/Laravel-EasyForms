<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasStream
{
    protected bool $stream = false;

    public function getStream(): bool
    {
        return $this->stream;
    }

    public function setStream(bool $stream): self
    {
        $this->stream = $stream;

        return $this;
    }
}
