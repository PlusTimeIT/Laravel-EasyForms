<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Alert;

trait HasAlerts
{
    /** @var Alert[] */
    protected array $alerts = [];

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
