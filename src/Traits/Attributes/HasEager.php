<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasEager
{
    protected bool $eager = false;

    public function getEager(): bool
    {
        return $this->eager;
    }

    public function setEager(bool $eager): static
    {
        $this->eager = $eager;

        return $this;
    }
}
