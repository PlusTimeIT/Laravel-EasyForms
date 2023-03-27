<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasTrigger
{
    protected $trigger = 'success_processing';

    public function getTrigger(): string
    {
        return $this->trigger;
    }

    public function setTrigger($trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }
}
