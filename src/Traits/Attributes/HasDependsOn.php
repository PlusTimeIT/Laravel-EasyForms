<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasDependsOn
{
    protected $dependsOn;

    public function dependsOn(string $dependsOn)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }

    public function getDependsOn(): string | null
    {
        return $this->dependsOn;
    }

    public function setDependsOn(string $dependsOn)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }
}
