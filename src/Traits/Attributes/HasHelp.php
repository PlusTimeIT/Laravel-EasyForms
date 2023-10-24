<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasHelp
{
    protected $help = '';

    public function getHelp(): string
    {
        return $this->help;
    }

    public function setHelp(string $help): self
    {
        $this->help = $help;

        return $this;
    }
}
