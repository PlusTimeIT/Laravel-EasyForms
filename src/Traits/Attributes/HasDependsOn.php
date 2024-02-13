<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDependsOn
{
    protected ?string $dependsOn;

    public function dependsOn(string $dependsOn): static
    {
        $this->dependsOn = $dependsOn;

        return $this;
    }

    public function getDependsOn(): ?string
    {
        return $this->dependsOn;
    }

    public function setDependsOn(string $dependsOn): static
    {
        $this->dependsOn = $dependsOn;

        return $this;
    }
}
