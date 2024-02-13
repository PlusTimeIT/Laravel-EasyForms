<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAlerts
{
    /** @var \PlusTimeIT\EasyForms\Elements\Alert[] */
    protected array $alerts = [];

    public function alerts(): array
    {
        return $this->getAlerts();
    }

    public function getAlerts(): array
    {
        return $this->alerts;
    }

    public function setAlerts(array $alerts): static
    {
        $this->alerts = $alerts;

        return $this;
    }
}
