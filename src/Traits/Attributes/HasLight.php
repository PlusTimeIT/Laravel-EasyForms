<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLight
{
    protected bool $light = false;

    public function getLight(): bool
    {
        return $this->light;
    }

    public function setLight(bool $light): static
    {
        $this->light = $light;

        return $this;
    }
}
