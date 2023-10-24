<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAlerts
{
    protected $alerts = [];

    public function alerts(): array
    {
        return $this->getAlerts();
    }

    public function getAlerts(): array
    {
        return $this->alerts;
    }

    public function setAlerts(array $alerts): self
    {
        $this->alerts = $alerts;

        return $this;
    }
}
