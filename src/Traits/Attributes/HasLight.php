<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasLight
{
    protected $light = false;

    public function getLight(): bool
    {
        return $this->light;
    }

    public function setLight(bool $light): self
    {
        $this->light = $light;

        return $this;
    }
}
