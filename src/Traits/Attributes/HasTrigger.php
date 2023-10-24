<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Enums\AlertTriggers;

trait HasTrigger
{
    protected $trigger = AlertTriggers::SuccessProcessing;

    public function getTrigger(): AlertTriggers
    {
        return $this->trigger;
    }

    public function setTrigger(AlertTriggers $trigger): self
    {
        $this->trigger = $trigger;

        return $this;
    }
}
