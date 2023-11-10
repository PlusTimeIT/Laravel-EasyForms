<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDependsOn
{
    protected ?string $dependsOn;

    public function dependsOn(string $dependsOn): self
    {
        $this->dependsOn = $dependsOn;

        return $this;
    }

    public function getDependsOn(): ?string
    {
        return $this->dependsOn;
    }

    public function setDependsOn(string $dependsOn): self
    {
        $this->dependsOn = $dependsOn;

        return $this;
    }
}
