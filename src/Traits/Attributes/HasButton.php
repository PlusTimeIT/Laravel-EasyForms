<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Button;

trait HasButton
{
    protected $button;

    public function getButton(): Button
    {
        return $this->button;
    }

    public function setButton(Button $button): self
    {
        $this->button = $button;

        return $this;
    }
}
