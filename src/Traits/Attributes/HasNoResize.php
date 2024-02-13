<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasNoResize
{
    protected bool $no_resize = false;

    public function getNoResize(): bool
    {
        return $this->no_resize;
    }

    public function setNoResize(bool $no_resize): static
    {
        $this->no_resize = $no_resize;

        return $this;
    }
}
