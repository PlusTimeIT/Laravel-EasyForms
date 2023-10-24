<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasAmPmInTitle
{
    protected $ampmInTitle = false;

    public function getAmPmInTitle(): bool
    {
        return $this->ampmInTitle;
    }

    public function setAmPmInTitle(bool $ampmInTitle): self
    {
        $this->ampmInTitle = $ampmInTitle;

        return $this;
    }
}
