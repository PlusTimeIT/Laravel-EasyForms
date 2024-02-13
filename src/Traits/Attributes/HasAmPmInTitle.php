<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAmPmInTitle
{
    protected bool $ampmInTitle = false;

    public function getAmPmInTitle(): bool
    {
        return $this->ampmInTitle;
    }

    public function setAmPmInTitle(bool $ampmInTitle): static
    {
        $this->ampmInTitle = $ampmInTitle;

        return $this;
    }
}
