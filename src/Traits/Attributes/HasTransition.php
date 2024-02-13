<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTransition
{
    protected string $transition = 'fade-transition';

    public function getTransition(): string
    {
        return $this->transition;
    }

    public function setTransition(string $transition): static
    {
        $this->transition = $transition;

        return $this;
    }
}
