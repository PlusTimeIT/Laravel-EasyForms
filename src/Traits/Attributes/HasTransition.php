<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTransition
{
    protected $transition = 'fade-transition';

    public function getTransition(): string
    {
        return $this->transition;
    }

    public function setTransition(string $transition): self
    {
        $this->transition = $transition;

        return $this;
    }
}
