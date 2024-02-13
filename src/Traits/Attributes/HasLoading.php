<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLoading
{
    protected bool $loading = false;

    public function getLoading(): bool|string
    {
        return $this->loading;
    }

    public function setLoading(bool|string $loading): static
    {
        $this->loading = $loading;

        return $this;
    }
}
